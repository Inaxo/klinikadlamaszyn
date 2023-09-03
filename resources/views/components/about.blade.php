
    <style>
    .slide {
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;
        transition: opacity 1s;
        width: 100%;
        height: 100%;
    }

    .slide.active {
        opacity: 1;
    }
</style>
<svg width="100%" height="100%" id="svg" viewBox="0 0 1440 390" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150 mt-[-16]"><path d="M 0,400 C 0,400 0,133 0,133 C 53.444715747934396,139.82944876063632 106.88943149586879,146.65889752127265 153,142 C 199.1105685041312,137.34110247872735 237.88698976445926,121.19385867554568 293,117 C 348.11301023554074,112.80614132445432 419.56260944629423,120.56566777654459 486,129 C 552.4373905537058,137.4343322234554 613.8625724503638,146.54347021827598 666,153 C 718.1374275496362,159.45652978172402 760.9871007522506,163.26045135035147 815,155 C 869.0128992477494,146.73954864964853 934.1890245406337,126.41472438031818 986,122 C 1037.8109754593663,117.58527561968182 1076.2568010852142,129.08065112837588 1130,135 C 1183.7431989147858,140.91934887162412 1252.78377111851,141.26267110617832 1307,140 C 1361.21622888149,138.73732889382168 1400.6081144407449,135.86866444691083 1440,133 C 1440,133 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="#ffffff" fill-opacity="0.53" class="transition-all duration-300 ease-in-out delay-150 path-0"></path><path d="M 0,400 C 0,400 0,266 0,266 C 46.23568874090516,272.74578862991734 92.47137748181032,279.49157725983474 143,270 C 193.52862251818968,260.50842274016526 248.35017881366394,234.77947959057838 312,225 C 375.64982118633606,215.22052040942162 448.1279072635342,221.39050437785176 504,229 C 559.8720927364658,236.60949562214824 599.1381921321989,245.65850289801455 648,248 C 696.8618078678011,250.34149710198545 755.3193242076705,245.97548403009006 809,246 C 862.6806757923295,246.02451596990994 911.5845110371192,250.43956098162533 960,260 C 1008.4154889628808,269.56043901837467 1056.3426316438524,284.26627204340855 1117,289 C 1177.6573683561476,293.73372795659145 1251.0449623874706,288.4953508447404 1307,283 C 1362.9550376125294,277.5046491552596 1401.4775188062647,271.7523245776298 1440,266 C 1440,266 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="#ffffff" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-1"></path></svg>
<div id="about" class="relative bg-white overflow-hidden ">

    <div class="max-w-7xl mx-auto lg:pr-1/2">
        <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
            <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                <polygon points="50,0 100,0 50,100 0,100"></polygon>
            </svg>

            <div class="pt-1"></div>

            <main class=" mx-auto max-w-7xl px-4  sm:px-6 lg:px-8  lg:mr-32">
            <div class="sm:text-center lg:text-left">
                    <h2 class="my-6 text-2xl tracking-tight font-extrabold text-gray-900 sm:text-3xl md:text-4xl">
                        Co dokładnie oferujemy?
                    </h2>
                <div>
                    <p class="text-justify">Dla każdego naszego klienta przygotowujemy specjalny pakiet wiedzy technicznej po dokonanej naprawie. Jest to zestaw niezbędnych informacji, który umożliwia prawidłową i bezawaryjną eksploatację maszyny. Dodatkowo, aby zapewnić pewność i komfort użytkowania, oferujemy szkolenie techniczne z zakresu obsługi maszyny, którą naprawialiśmy. I co ważne – szkolenie to jest dla naszych klientów całkowicie bezpłatne.</br><strong> Cena? Ano dokładnie 0 zł.</strong></br>

                        Naszym priorytetem jest, by maszyny służyły ich właścicielom przez wiele lat, a nie były zmuszone do częstych napraw. Dlatego też, wychodząc naprzeciw potrzebom klientów, współpracujemy z renomowanym centrum CNC. Dzięki tej kooperacji możemy odtworzyć nawet te części zamienne, które stały się niedostępne na rynku, szczególnie do unikatowych maszyn do szycia.</p>
                </div>
            </div>
            </main>
        </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <div class="slider">
            <img class="slide h-40 w-full object-cover object-top sm:h-72 md:h-96 lg:w-full lg:h-full" src="/img/cards/card1.jpg" alt="">
            <img class="slide h-40 w-full object-cover object-top sm:h-72 md:h-96 lg:w-full lg:h-full" src="/img/cards/card2.jpg" alt="">
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    let slides = document.querySelectorAll(".slide");
    let currentSlide = 0;

    slides[currentSlide].classList.add('active');

    setInterval(function () {
        slides[currentSlide].classList.remove('active');
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].classList.add('active');
    }, 5000);
});

    </script>
