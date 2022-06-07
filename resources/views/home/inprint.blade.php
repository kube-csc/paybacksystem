@extends('layouts.headFrontend')

@section('content')

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Impressum</h2>
                    <p>
                        {!! str_replace('_' , ' ' , env('APP_NAME')) !!} wird betrieben durch:
                    </p>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p>
                            {!! str_replace('_' , ' ' , env('APP_Firmenname')) !!}
                            <br>{!! str_replace('_' , ' ' , env('APP_Strasse')) !!}
                            <br>{!! str_replace('_' , ' ' , env('APP_PLZ')) !!} {!! str_replace('_' , ' ' , env('APP_Ort')) !!}
                            <br><br><i class="icofont-phone"></i> {!! str_replace('_' , ' ' , env('APP_Telefon')) !!}
                            <br><i class="icofont-envelope"></i> {!! str_replace('_' , ' ' , env('APP_Email')) !!}
                        </p>
                        @if(env('APP_Inhabernezeichnung')!='')
                            <strong>{!! str_replace('_' , ' ' , env('APP_Inhabernezeichnung')) !!}</strong>
                            @php
                              $names=explode(";", str_replace('_' , ' ' , env('APP_Inhaber')));
                            @endphp
                            <ul>
                                @foreach($names as $name)
                                 <li><i class="ri-check-double-line"></i> {!! $name !!}</li>
                                @endforeach
                            </ul>
                       @endif
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            @if(env('APP_UStIdNr')!='')
                                <br><strong>USt IdNr.:</strong><br>{!! str_replace('_' , ' ' , env('APP_UStIdNr')) !!}
                            @endif
                            @if(env('APP_HandelsregisterEeintagngsOrt')!='')
                                <br><strong>Handelsregister Eintragungsort:</strong><br>{!! str_replace('_' , ' ' , env('APP_HandelsregisterEeintagngsOrt')) !!}
                            @endif
                            @if(env('APP_HandelsregisterNr')!='')
                                <br><strong>Handelsregister Nr.:</strong><br>{!! str_replace('_' , ' ' , env('APP_HandelsregisterNr')) !!}
                            @endif
                        </p>
                    </div>
                </div>

                <div class="section-content">
                    <h3>Bildmaterial von</h3>
                    <p>
                        @include('_partials.bildmaterial')
                    </p>
                </div>

                <div class="section-content">
                    @if(env('APP_EmailSuport')!='')
                        <h3>Fragen zur Nutzung des Dienstes</h3>
                        <p>
                            <i class="icofont-envelope"></i> {!! str_replace('_' , ' ' , env('APP_EmailSuport')) !!}
                        </p>
                    @endif
                    @include('_partials.recht')

                </div>

            </div>
        </section><!-- End About Us Section -->

    </main><!-- End #main -->

@endsection
