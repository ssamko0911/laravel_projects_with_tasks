<x-main.layout title="PM MAIN PAGE">
    <!-- Sidebar Start -->
    <x-main.aside :tasks="$tasks"/>
    <!-- Sidebar End -->

    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        <x-main.navigation />
        <!-- Navbar End -->

        <!-- Main table Start -->
        <x-main.task-table :tasks="$tasks" />
        <!-- Main table End -->

        <!-- Footer Start -->
        <x-main.footer />
        <!-- Footer End -->
    </div>
    <!-- Content End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</x-main.layout>
