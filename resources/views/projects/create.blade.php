<x-main.layout title="PROJECT">
        <!-- Sidebar Start -->
            <x-main.aside />
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <x-main.navigation />
            <!-- Navbar End -->

            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-secondary rounded justify-content-center mx-0">
                    <x-forms.create />
                </div>
            </div>
            <!-- Blank End -->

            <!-- Footer Start -->
            <x-main.footer />
            <!-- Footer End -->
        </div>
        <!-- Content End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</x-main.layout>
