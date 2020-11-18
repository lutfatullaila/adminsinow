@extends('master')
@section('content')
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-3">
                    <div class="income-dashone-total shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Belajar</h2>
                                <div class="main-income-phara">
                                    <p>angka</p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3> <span class="counter"> {{ $data_angka }} Data</span></h3>
                                </div>
                            </div>
                            <div class="income-range">
                                <p>Jumlah diakses : {{ $total_angka }}</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="income-dashone-total shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Belajar</h2>
                                <div class="main-income-phara">
                                    <p>huruf</p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3> <span class="counter">{{ $data_huruf }} Data</span></h3>
                                </div>
                            </div>
                            <div class="income-range">
                                <p>Jumlah diakses : {{ $total_huruf }}</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="income-dashone-total shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Belajar</h2>
                                <div class="main-income-phara">
                                    <p>warna</p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3> <span class="counter">{{ $data_warna }} Data</span></h3>
                                </div>

                            </div>
                            <div class="income-range">
                                <p>Jumlah diakses : {{ $total_warna }}</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="income-dashone-total shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Belajar</h2>
                                <div class="main-income-phara">
                                    <p>buah/hewan</p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3> <span class="counter">{{ $data_membaca }} Data</span></h3>
                                </div>
                            </div>
                            <div class="income-range">
                                <p>Jumlah diakses : {{ $total_membaca }}</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="income-dashone-total shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Quiz</h2>
                                <div class="main-income-phara">
                                    <p>hitung/baca</p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3> <span class="counter">{{ $data_quiz }} Data</span></h3>
                                </div>
                            </div>
                            <div class="income-range">
                                <p>Jumlah diakses : {{ $total_quiz }}</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="income-dashone-total shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Hiburan</h2>
                                <div class="main-income-phara">
                                    <p>menyanyi</p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3> <span class="counter">{{ $data_menyanyi }} Data</span></h3>
                                </div>

                            </div>
                            <div class="income-range">
                                <p>Jumlah diakses : {{ $total_menyanyi }}</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="income-dashone-total shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Hiburan</h2>
                                <div class="main-income-phara">
                                    <p>mewarna</p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3> <span class="counter">{{ $data_mewarna }} Data</span></h3>
                                </div>

                            </div>
                            <div class="income-range">
                                <p>Jumlah diakses : {{ $total_mewarna }} </p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="income-dashone-total shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Kritik dan Saran</h2>

                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3> <span class="counter">{{ $data_kritiksaran }} Data</span></h3>
                                </div>
                            </div>
                            <div class="income-range">
                                <p>Jumlah diakses : {{ $total_kritiksaran }}</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection
