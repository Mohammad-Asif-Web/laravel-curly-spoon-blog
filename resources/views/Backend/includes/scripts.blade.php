<script src="{{asset('Backend/js/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('Backend/js/scripts.js')}}"></script>
{{-- chart --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{asset('Backend/assets/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('Backend/assets/demo/chart-bar-demo.js')}}"></script>
{{-- datatables --}}
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="{{asset('Backend/js/datatables-simple-demo.js')}}"></script>
{{-- sweet alert2 --}}
<script src="{{asset('Backend/js/sweetalert2.all.min.js')}}"></script>
{{-- axios --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@stack('js')

</body>
</html>