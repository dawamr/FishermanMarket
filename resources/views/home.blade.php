@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>
                        &nbsp &nbsp Indonesia merupakan negara penghasil ikan terbesar di Asia Tenggara, terutama Ikan Konsumsi air laut. Wilayah perairan laut Indonesia yang sangat luas dimanfaatkan oleh Kapal-Kapal penangkap Ikan asing yang mencuri kekayaan ikan laut Indonesia.
                    </p>
                    <p>
                        &nbsp &nbsp Kalau sebatas wilayah laut Zone Ekonomi Eklusif barangkali tidak begitu kita permasalahkan, namun mereka sering jauh menangkap ikan di laut wilayah Indonesia sehingga mengganggu pendapatan nelayan-nelayan tradisional Indonesia yang peralatannya masih sangat sederhana.
                    </p>
                    <P>
                        &nbsp &nbsp Jumlahnya sangat banyak dan berlimpah, termasuk jenis yang di konsumsi cukup banyak.
                    </P>
                    <p>
                        &nbsp &nbsp Budidaya pembesaran ikan konsumsi dilakukan untuk mendapatkan ikan siap konsumsi atau ukuran yang diinginkan konsumen.
                    </p>
                    <p>
                     &nbsp &bsp Kebutuhan ikan untuk konsumsi berasal dari ikan air tawar, payau dan laut. Sebelum melakukan kegiatan budidaya ikan konsumsi dilakukan perlu terlebih dahulu mengetahui karakteristik ikan yang akan dibudidayakan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
