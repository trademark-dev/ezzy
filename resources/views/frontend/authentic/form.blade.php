<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ezzy Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body>
    <nav class="nav_icon">
        <img src="{{ asset('assets/logo.svg') }}" alt="">
    </nav>
    <div id="wrape_document">
        <div id="con_container_one" class="container con_All text-center">
            <div class="start_first_form_qna">
                <h4 data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-easing="ease-in-out"
                    class="title_fir_form m-0">Pay your rent monthly</h4>
                <h4 data-aos="fade-right" data-aos-delay="50" data-aos-duration="800" data-aos-easing="ease-in-out"
                    class="title_fir_form m-0">(it only takes 3 days)</h4>

                <p data-aos="fade-right" data-aos-delay="50" data-aos-duration="1100" data-aos-easing="ease-in-out"
                    class="diss mt-4 mb-0">1. Fill out application (3 min)</p>
                <p data-aos="fade-right" data-aos-delay="50" data-aos-duration="1300" data-aos-easing="ease-in-out"
                    class="diss mb-0">2. Get accepted by our team (1 day)</p>
                <p data-aos="fade-right" data-aos-delay="50" data-aos-duration="1500" data-aos-easing="ease-in-out"
                    class="diss mb-0">3. Verify your income (1 day)</p>
                <p data-aos="fade-right" data-aos-delay="50" data-aos-duration="1700" data-aos-easing="ease-in-out"
                    class="diss mb-0">4. Sign contract & add your card (1 day)</p>
                <h4 data-aos="fade-right" data-aos-delay="50" data-aos-duration="1900" data-aos-easing="ease-in-out"
                    class="all_donr_f">All done! We pay your landlord</h4>

                <a class="clock_Appllly"><i class="ri-time-fill"></i> Takes 3 minutes</a>

                <a id="apply_now_first_start" class="apply_now1">Apply now
                    <div id="first_spin" class="ping" style="display: none"></div>
                </a>

            </div>
        </div>
        <div id="con_container_two" class="container con_All_second text-center"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('assets/function.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
