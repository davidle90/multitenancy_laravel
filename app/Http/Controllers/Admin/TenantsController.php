<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tenant;
use Illuminate\Support\Facades\DB;

class TenantsController extends Controller
{

    public function deleteTenant($tenantId)
    {
        // Find the tenant
        $tenant = Tenant::find($tenantId);

        if (!$tenant) {
            return response()->json(['message' => 'Tenant not found'], 404);
        }

        // Get the database name before deleting the tenant
        $databaseName = $tenant->database; // Adjust this if needed

        tenancy()->initialize($tenant); // Ensure we're in the correct tenant context

        // Delete the tenant
        $tenant->delete();

        // Drop the tenant's database
        DB::statement("DROP DATABASE IF EXISTS `$databaseName`");

        return response()->json(['message' => 'Tenant deleted successfully']);
    }
}
