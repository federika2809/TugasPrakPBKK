@extends('app')
@section('content')
<section id="billboard">

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <button class="prev slick-arrow">
                    <i class="icon icon-arrow-left"></i>
                </button>

                <div class="main-slider pattern-overlay">
                    <div class="slider-item">
                        <div class="banner-content">
                            <h2 class="banner-title">Life of the Wild</h2>
                            <p>Sebuah situs yang menyoroti keindahan dan keanekaragaman alam liar. 
                                Situs ini menawarkan berbagai informasi tentang flora, fauna, ekosistem, 
                                dan tantangan yang dihadapi oleh lingkungan alami di seluruh dunia. 
                                Melalui artikel, foto, dan video, pengunjung dapat mengeksplorasi kehidupan 
                                hewan-hewan di habitat aslinya, belajar tentang upaya konservasi, 
                                serta mendapatkan wawasan mendalam tentang pentingnya melestarikan alam untuk 
                                generasi mendatang.</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn btn-outline-accent btn-accent-arrow">Read More<i
                                        class="icon icon-ns-arrow-right"></i></a>
                            </div>
                        </div><!--banner-content-->
                        <img src="images/main-banner1.jpg" alt="banner" class="banner-image">
                    </div><!--slider-item-->

                    <div class="slider-item">
                        <div class="banner-content">
                            <h2 class="banner-title">Birds gonna be Happy</h2>
                            <p>Halaman yang didedikasikan untuk para pecinta burung dan konservasi burung.     
                            Di sini, pengunjung bisa menemukan informasi tentang berbagai jenis burung, 
                            habitat mereka, kebiasaan unik, serta tips untuk menciptakan lingkungan yang 
                            mendukung kehidupan burung. Situs ini juga mempromosikan kampanye untuk 
                            melindungi spesies burung yang terancam punah dan mendorong partisipasi 
                            masyarakat dalam upaya pelestarian alam. Dengan berbagi pengetahuan dan kesadaran, 
                            halaman ini berupaya membuat dunia tempat yang lebih baik bagi burung-burung untuk 
                            berkembang dengan bahagia.</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn btn-outline-accent btn-accent-arrow">Read More<i
                                        class="icon icon-ns-arrow-right"></i></a>
                            </div>
                        </div><!--banner-content-->
                        <img src="images/main-banner2.jpg" alt="banner" class="banner-image">
                    </div><!--slider-item-->

                </div><!--slider-->

                <button class="next slick-arrow">
                    <i class="icon icon-arrow-right"></i>
                </button>

            </div>
        </div>
    </div>

</section>
@endsection