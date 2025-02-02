<!-- Sidebar Toggle Button (Hamburger Menu) -->
<button id="sidebar-toggle" aria-controls="logo-sidebar" aria-expanded="false" type="button" class="btn btn-light d-sm-none ms-3 mt-2">
    <span class="visually-hidden">Open sidebar</span>
    <i class="ph ph-list"></i>
</button>

<!-- Sidebar -->
<aside id="logo-sidebar" class="bg-light border-end vh-100 p-3 d-flex flex-column sidebar collapse show" style="width: 250px; min-height: 100vh;">
    <!-- Close Button (only visible on mobile) -->
    <button id="sidebar-close" aria-label="Close sidebar" type="button" class="btn-close d-sm-none position-absolute top-3 end-3"></button>

    <div class="d-flex align-items-center mb-4">
        <span class="fs-5 fw-semibold">{{ config('app.name', 'Laravel') }}</span>
    </div>

    <ul class="nav flex-column mb-auto">
        <li class="nav-item">
            <a href="#" class="nav-link text-dark">
                Link
            </a>
        </li>
    </ul>
</aside>

<!-- JavaScript for Sidebar Toggle -->
<script>
    const sidebar = document.getElementById('logo-sidebar');
    const toggleButton = document.getElementById('sidebar-toggle');
    const closeButton = document.getElementById('sidebar-close');
    const mainContent = document.querySelector('main');

    toggleButton.addEventListener('click', () => {
        sidebar.classList.toggle('d-none'); // Hides/shows sidebar
        mainContent.style.marginLeft = sidebar.classList.contains('d-none') ? '0' : '250px'; // Adjusts main content margin
    });

    closeButton.addEventListener('click', () => {
        sidebar.classList.add('d-none');
        mainContent.style.marginLeft = '0';
    });
</script>
