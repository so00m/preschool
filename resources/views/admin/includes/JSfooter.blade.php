<script src="{{asset('dashAssets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('dashAssets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('dashAssets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<script src="{{asset('dashAssets/js/sb-admin-2.js')}}"></script>
<script src="{{asset('dashAssets/js/sb-admin-2.min.js')}}"></script>
<script src="{{asset('dashAssets/vendor/chart.js/Chart.min.js')}}"></script>

<script src="{{asset('dashAssets/js/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('dashAssets/js/demo/chart-pie-demo.js')}}"></script>

<script src="{{asset('dashAssets/js/demo/chart-bar-demo.js')}}"></script>

<script src="{{asset('dashAssets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('dashAssets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{asset('dashAssets/js/demo/datatables-demo.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
    $(document).ready(function () {
        // Toggle the side navigation
        $("#sidebarToggle, #sidebarToggleTop").on('click', function (e) {
            $("body").toggleClass("sidebar-toggled");
            $(".sidebar").toggleClass("toggled");
            if ($(".sidebar").hasClass("toggled")) {
                $('.sidebar .collapse').collapse('hide');
            }
        });
    
        // Close any open menu accordions when window is resized below 768px
        $(window).resize(function () {
            if ($(window).width() < 768) {
                $('.sidebar .collapse').collapse('hide');
            }
        });
    
        // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
        $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function (e) {
            if ($(window).width() > 768) {
                var e0 = e.originalEvent,
                    delta = e0.wheelDelta || -e0.detail;
                this.scrollTop += (delta < 0 ? 1 : -1) * 30;
                e.preventDefault();
            }
        });
    
        // Activate scrollspy to add active class to navbar items on scroll
        $('body').scrollspy({
            target: '#accordionSidebar'
        });
    
        // Toggle the side navigation
        $('.nav-link.collapsed').on('click', function () {
            var $this = $(this);
            var $collapseElement = $this.next('.collapse');
            
            if ($collapseElement.hasClass('show')) {
                $collapseElement.collapse('hide');
                $this.attr('aria-expanded', 'false');
            } else {
                $collapseElement.collapse('show');
                $this.attr('aria-expanded', 'true');
            }
        });
    });
    </script>