@extends('layouts.headFrontend')

@section('content')

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Nutzungsbedingungen und Datenschutz</h2>
                </div>

                <div class="section-content">
                    @include('_partials.termsOfUse')
                </div>

            </div>
        </section><!-- End About Us Section -->

    </main><!-- End #main -->

@endsection
