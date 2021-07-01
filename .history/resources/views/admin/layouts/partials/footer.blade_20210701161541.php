<footer class="content-footer">
    {{-- <div>© 2021 Vetra - <a href="" target="_blank">Laborasyon</a></div> --}}
    <div>
        <nav class="nav gap-4">
            <a href="licenses/standard.html" class="nav-link">Licenses</a>
            <a href="#" class="nav-link">Change Log</a>
            <a href="#" class="nav-link">Get Help</a>
        </nav>
    </div>
</footer>
<!-- ./ content-footer -->

</div>
<!-- ./ layout-wrapper -->

<!-- Bundle scripts -->
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('libs/bundle.js')}}"></script>

<!-- Apex chart -->
<script src="{{asset('libs/charts/apex/apexcharts.min.js')}}"></script>

<!-- Slick -->
<script src="{{asset('libs/slick/slick.min.js')}}"></script>

<!-- Examples -->
<script src="{{asset('dist/js/examples/dashboard.js')}}"></script>

<!-- Main Javascript file -->
<script src="{{asset('dist/js/app.min.js')}}"></script>
<script src="{{asset('libs/datatable/datatables.min.js')}}"></script>
<script src="{{asset('libs/ckeditor5/ckeditor.js')}}"></script>

@yield('scripts')
