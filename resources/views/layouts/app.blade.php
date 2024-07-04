<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perpustakaan Kita</title>

    @include('inc.css')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('inc/sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('inc.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Perpustakaan Kita</h1>

                    @yield('content')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('inc.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->

    @include('inc.js')

    {{-- <script>
        $('.btn-add').click(function() {
            let tbody = $('tbody');
            let newTr = "<tr>";
                newTr += "<td>";
                newTr += "<select class='form-control' name='id_buku[]'>";
                newTr += "<option>Pilih Buku</option>";
                newTr += "</select>";
                newTr += "</td>"
                newTr += "<td><Input type='date' name='tanggal_pinjam[]' class='form-control'></td>";
                newTr += "<td><Input type='date' name='tanggal_pengembalian[]' class='form-control'></td>";
                newTr += "<td>Hapus</td>";
                newTr += "</tr>";
                tbody.append(newTr);
        });
    </script> --}}

</body>

</html>
