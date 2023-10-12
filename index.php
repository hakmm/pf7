<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/title.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/news.css">
    <link rel="stylesheet" href="css/game.css">
    <link rel="stylesheet" href="css/studios.css">
    <link rel="stylesheet" href="css/stories.css">
    <link rel="stylesheet" href="css/guide.css">
    <link rel="stylesheet" href="css/goyong.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="shortcut icon" href="img/favicon/favicon.png" type="image/x-icon">
    <link rel="icon" href="img/favicon/favicon.png" type="image/x-icon">
    <title>Devsisters</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ADLaM+Display&family=Noto+Serif+KR&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" type="text/javascript"></script>
    
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <!-- 반응형 웹 -->
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/mobile.css">
    <script src="js/responsive.js" type="text/javascript"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            const header = document.querySelector('header');
            const scrollArea = document.querySelector('#title');

            window.addEventListener('scroll', () => {
                if (window.scrollY > scrollArea.offsetTop) {
                    header.classList.add('bgC');
                } else {
                    header.classList.remove('bgC');
                }
            });

            const box = document.querySelector('#global');

            window.addEventListener('scroll', () => {
                const triggerPosition = window.innerHeight / 2;
                
                const boxPosition = box.getBoundingClientRect().top;
                
                if (boxPosition < triggerPosition) {
                    box.style.opacity = '1';
                }
            });

            $("header .container ul.menu li div.sub-menu").hide();

            $("header .container ul.menu > li").mouseenter(function(){
                var n = $(this).index()+1;
                $("header .container ul.menu > li:nth-child("+n+") div.sub-menu").slideDown();
                $(".sub-menu").not("header .container ul.menu > li:nth-child("+n+") div.sub-menu").css("display","none");
            });

            $(".sub-menu").mouseleave(function(){
                $(".sub-menu").slideUp();
            });

            $('.slide').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed : 1500,
                responsive: [
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    }
                ]
            });
	
            function updateImageSrc() {
                var responsive01 = document.getElementById('responsive01');
                var responsive02 = document.getElementById('responsive02');
                var responsive03 = document.getElementById('responsive03');

                if (window.innerWidth <= 720) {
                    responsive01.src = 'img/responsive01.webp';
                    responsive02.src = 'img/responsive02.webp';
                    responsive03.src = 'img/responsive03.webp';
                } else {
                    responsive01.src = 'img/ourgames01.webp';
                    responsive02.src = 'img/ourgames02.webp';
                    responsive03.src = 'img/ourgames03.webp';
                }
            }
            
            window.addEventListener('resize', updateImageSrc);
            window.addEventListener('load', updateImageSrc);

            $(".family li").has("ul").children("ul").before("<i class='ion-chevron-down'></i>");

            $(".family li").has("ul").children("ul").hide();

            var a=0
            $(".family li").has("ul").click(function(){
                $(this).children("ul").slideToggle();
                if(a==0) {
                    $(this).children("i").attr("class","ion-chevron-up");
                    a=1; 
                } else {
                    $(this).children("i").attr("class","ion-chevron-down"); 
                    a=0;
                }
            });

            AOS.init();
        });
    </script>

    <script src="js/motion.js"></script>

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
    <!-- 상단 -->
    <?php include 'header.html' ?>
    <!-- 타이틀 -->
    <div id="title">
        <div class="vi">
            <video muted autoplay loop>
                <source src="video/devsisters-home-hero.mp4" type="video/mp4">
            </video>
        </div>
        <div class="container wrap">
            <h2>
                <span>BE BRAVE,</span>
                <br>
                <span>STAY CRISPY</span>
            </h2>
        </div>
    </div>  
    <!-- 내용 -->
    <main>
        <section id="global">
            <div class="container wrap">
                <div>
                    용감한 도전과 장인 정신으로 문화, 국경, 언어, 세대를 넘어<br>
                    <span>전 세계를 사로잡는 대체불가능한 경험을 선사합니다.</span>
                </div>
                <canvas id="motion" width="1258" height="666"></canvas>
            </div>
        </section>
        <section id="news">
            <div class="container wrap" data-aos="fade-up">
                <h3>LATEST NEWS</h3>
            </div>
            <div class="container-sub">
                <ul class="slide" data-aos="fade-up">
                    <li>
                        <div>
                            <img src="img/news01.webp" alt="쿠키런: 킹덤, 인천국제공항과 ‘Brave Travel’ 프로모션 실시">
                            <br><br>
                            <div>
                                <h4>쿠키런: 킹덤, 인천국제공항과 ‘Brave Travel’<br> 프로모션 실시</h4>
                                <br><br>
                                <div>
                                    <button class="btn">#COOKIERUN:KINGDOM</button>
                                    <button class="btn">#EVENT</button>
                                    <button class="btn">#NEWS</button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="img/news02.webp" alt="데브시스터즈 신작 ‘브릭시티’ 출시 하루 만에 한국 애플 앱스토어 인기 순위 1위 달성">
                            <br><br>
                            <div>
                                <h4>데브시스터즈 신작 ‘브릭시티’ 출시 하루 만에 한국 애플 앱스토어 인기 순위 1위 달성</h4>
                                <br><br>
                                <div>
                                    <button class="btn">#BRIXITY</button>
                                    <button class="btn">#NEWS</button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="img/news03.webp" alt="브릭시티 시네마틱 트레일러 | Brix-By-Brix 🧱🌱">
                            <br><br>
                            <div>
                                <h4>브릭시티 시네마틱 트레일러 | Brix-By-Brix 🧱🌱</h4>
                                <br><br>
                                <div>
                                    <button class="btn">#BRIXITY</button>
                                    <button class="btn">#PREVIEW</button>
                                    <button class="btn">#TRAILER</button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="img/news04.webp" alt="브릭시티 런칭 트레일러 | Return to Earth 🚀🌎">
                            <br><br>
                            <div>
                                <h4>브릭시티 런칭 트레일러 | Return to Earth 🚀🌎</h4>
                                <br><br>
                                <div>
                                    <button class="btn">#BRIXITY</button>
                                    <button class="btn">#PREVIEW</button>
                                    <button class="btn">#TRAILER</button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="img/news05.webp" alt="데브시스터즈, 샌드박스 시티빌딩 게임 신작 ‘브릭시티’ 글로벌 정식 출시">
                            <br><br>
                            <div>
                                <h4>데브시스터즈, 샌드박스 시티빌딩 게임 신작 ‘브릭시티’ 글로벌 정식 출시</h4>
                                <br><br>
                                <div>
                                    <button class="btn">#BRIXITY</button>
                                    <button class="btn">#DEVSISTERS</button>
                                    <button class="btn">#NEWS</button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="img/news06.webp" alt="쿠키런: 킹덤, 중국 ‘탭탭’・‘웨이보’ 예약순위 1위 달성">
                            <br><br>
                            <div>
                                <h4>쿠키런: 킹덤, 중국 ‘탭탭’・‘웨이보’ 예약순위 1위 달성</h4>
                                <br><br>
                                <div>
                                    <button class="btn">#COOKIERUN:KINGDOM</button>
                                    <button class="btn">#NEWS</button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="img/news07.webp" alt="데브시스터즈, 샌드박스 시티빌딩 신작 ‘브릭시티’, ‘개발 비하인드 스토리’ 영상 공개">
                            <br><br>
                            <div>
                                <h4>데브시스터즈, 샌드박스 시티빌딩 신작 ‘브릭시티’, ‘개발 비하인드 스토리’ 영상 공개</h4>
                                <br><br>
                                <div>
                                    <button class="btn">#BRIXITY</button>
                                    <button class="btn">#NEWS</button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="img/news08.webp" alt="쿠키런: 킹덤, ‘꿈꾸는 인어의 바다’ 업데이트 진행">
                            <br><br>
                            <div>
                                <h4>쿠키런: 킹덤, ‘꿈꾸는 인어의 바다’ 업데이트 진행</h4>
                                <br><br>
                                <div>
                                    <button class="btn">#COOKIERUN:KINGDOM</button>
                                    <button class="btn">#NEWS</button>
                                    <button class="btn">#UPDATE</button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="wrap marT100" data-aos="fade-up">
                <a href="" class="all">READ ALL</a>
            </div>
        </section>
        <section id="game">
            <div class="container wrap">
                <h3 data-aos="fade-up">OUR GAMES</h3>
                <div class="container-sub">
                    <div data-aos="fade-up">
                        <img id="responsive01" src="" alt="쿠키런 오븐">
                        <article>
                            <video muted autoplay loop>
                                <source src="video/home-ourgames-ovenbreak.mp4" type="video/mp4">
                            </video>
                        </article>
                        <div class="games-img">
                            <figure>
                                <img src="img/ourgames01-sub.webp" alt="쿠키런 오븐">
                                <figcaption>최고의 러닝 게임</figcaption>
                                <p>마녀의 오븐을 탈출한 개성 넘치는 쿠키들!<br>
                                    매력적인 쿠키&펫과 달리며 즐거운 모험을 떠나요</p>
                            </figure>
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="img/apple.svg" alt="애플스토어">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="img/googleplay.svg" alt="구글플레이스토어">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div data-aos="fade-up">
                        <img id="responsive02" src="" alt="쿠키런 킹덤">
                        <article>
                            <video muted autoplay loop>
                                <source src="video/home-ourgames-kingdom.mp4" type="video/mp4">
                            </video>
                        </article>
                        <div class="games-img">
                            <figure>
                                <img src="img/ourgames02-sub.webp" alt="쿠키런 킹덤">
                                <figcaption>처음 ‘맛'나는 소셜 RPG</figcaption>
                                <p>화려한 스킬의 쿠키들과 새로운 왕국을 건설해보세요<br>
                                    신나는 모험과 박진감 넘치는 전투가 펼쳐집니다</p>
                            </figure>
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="img/apple.svg" alt="애플스토어">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="img/googleplay.svg" alt="구글플레이스토어">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div data-aos="fade-up">
                        <img id="responsive03" src="" alt="샌드박스 시티 빌딩 게임">
                        <article>
                            <video muted autoplay loop>
                                <source src="video/home-ourgames-brixity.mp4" type="video/mp4">
                            </video>
                        </article>
                        <div class="games-img">
                            <figure>
                                <img src="img/ourgames03-sub.webp" alt="샌드박스 시티 빌딩 게임">
                                <figcaption>샌드박스 시티 빌딩 게임</figcaption>
                                <p>지구의 모습은 여러분에게 달려 있습니다!<br>
                                    Build your world, Brix by Brix!</p>
                            </figure>
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="img/apple.svg" alt="애플스토어">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="img/googleplay.svg" alt="구글플레이스토어">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <div class="wrap marT100" data-aos="fade-up">
                <a href="" class="all">MEET ALL GAMES</a>
            </div>
        </section>
        <section id="studios">
            <div class="container wrap">
                <h3 data-aos="fade-up">STUDIOS</h3>
                <div class="container-sub" data-aos="fade-up">
                    <ul>
                        <li>
                            <a href="#">
                                <div>
                                    <img src="img/studios01.svg" alt="오븐게임즈">
                                    <h4>오븐게임즈</h4>
                                    <p>
                                        오븐게임즈는 많은 사람들이 작지만 달콤한<br>
                                        행복을 느낄 수 있도록 시간과 정성을 다해<br>
                                        맛있고 다양한 게임을 만들고자 합니다.
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div>
                                    <img src="img/studios02.svg" alt="스튜디오킹덤">
                                    <h4>스튜디오 킹덤</h4>
                                    <p>
                                        스튜디오 킹덤이 나누고 싶은 가치, 사랑.<br>
                                        우리는 콘텐츠를 통해 '사랑할 수 있는<br>
                                        세계'를 만들어 갑니다.
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div>
                                    <img src="img/studios03.svg" alt="프레스에이">
                                    <h4>프레스에이</h4>
                                    <p>
                                        즐거운 두근거림이 있는 게임, 그리고 본연의<br>
                                        재미에 충실한 게임, Press A는 그런 짜릿한<br>
                                        경험을 주는 것을 게임 제작 목표로 합니다.
                                    </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="stories">
            <div class="container wrap">
                <h3 data-aos="fade-up">OUR STORIES</h3>
                <div class="container-sub" data-aos="fade-up">
                    <ul>
                        <li>
                            <div>
                                <h4>[쿠키런: 킹덤에서 일하면 어때요?] #1. 기획/스토리 직군</h4>
                                <button class="btn">#CULTURE</button>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h4><쿠키런: 오븐브레이크> 팀의 오피스를 소개합니다</h4>
                                <button class="btn">#LIFE</button>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h4>무려 7개국어! <쿠키런: 킹덤> 글로벌 더빙 이야기</h4>
                                <button class="btn">#WORK</button>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h4>[비하인드 쿠키런: 킹덤] #1. 쿠키 왕국, 그 건설의 시작</h4>
                                <button class="btn">#HIGHLIGHTS</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="wrap marT100">
                <a href="" class="all">READ ALL</a>
            </div>
        </section>
        <section id="guide">
            <div class="container wrap">
                <div class="container-sub" data-aos="fade-up">
                    <ul>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 128 128" width="128" height="128" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);" preserveAspectRatio="xMidYMid meet"><defs><clipPath id="__lottie_element_2"><rect width="128" height="128" x="0" y="0"></rect></clipPath><clipPath id="__lottie_element_7"><path d="M0,0 L128,0 L128,128 L0,128z"></path></clipPath><g id="__lottie_element_10"><g style="display: block;" transform="matrix(1,0,0,1,56,24.999996185302734)" opacity="1"><path fill="rgb(255,0,0)" fill-opacity="1" d=" M64,-60 C64,-60 64,60 64,60 C64,62.20759963989258 62.20759963989258,64 60,64 C60,64 -60,64 -60,64 C-62.20759963989258,64 -64,62.20759963989258 -64,60 C-64,60 -64,-60 -64,-60 C-64,-62.20759963989258 -62.20759963989258,-64 -60,-64 C-60,-64 60,-64 60,-64 C62.20759963989258,-64 64,-62.20759963989258 64,-60z"></path></g></g><clipPath id="__lottie_element_14"><path d="M0,0 L128,0 L128,128 L0,128z"></path></clipPath><g id="__lottie_element_17"><g style="display: block;" transform="matrix(1,0,0,1,51.5,120)" opacity="1"><path fill="rgb(255,0,0)" fill-opacity="1" d=" M64,-60 C64,-60 64,60 64,60 C64,62.20759963989258 62.20759963989258,64 60,64 C60,64 -60,64 -60,64 C-62.20759963989258,64 -64,62.20759963989258 -64,60 C-64,60 -64,-60 -64,-60 C-64,-62.20759963989258 -62.20759963989258,-64 -60,-64 C-60,-64 60,-64 60,-64 C62.20759963989258,-64 64,-62.20759963989258 64,-60z"></path></g></g><mask id="__lottie_element_17_1" mask-type="alpha"><use xlink:href="#__lottie_element_17"></use></mask><mask id="__lottie_element_10_1" mask-type="alpha"><use xlink:href="#__lottie_element_10"></use></mask><mask id="__lottie_element_51"><rect fill="#ffffff" width="128" height="128" transform="matrix(1,0,0,1,-108,-60)"></rect><path fill="#000000" clip-rule="nonzero" d=" M7.061999797821045,2.312000036239624 C7.061999797821045,2.312000036239624 -7.188000202178955,2.312000036239624 -7.188000202178955,2.312000036239624 C-7.188000202178955,2.312000036239624 -7.188000202178955,7.875 -7.188000202178955,7.875 C-7.188000202178955,7.875 7.061999797821045,7.875 7.061999797821045,7.875 C7.061999797821045,7.875 7.061999797821045,2.312000036239624 7.061999797821045,2.312000036239624" fill-opacity="1"></path></mask><g id="__lottie_element_53"><g style="display: block;" transform="matrix(1,0,0,1,114,62)" opacity="1"><path fill="rgb(255,129,0)" fill-opacity="1" d=" M0,-6 C3.3113999366760254,-6 6,-3.3113999366760254 6,0 C6,3.3113999366760254 3.3113999366760254,6 0,6 C-3.3113999366760254,6 -6,3.3113999366760254 -6,0 C-6,-3.3113999366760254 -3.3113999366760254,-6 0,-6z"></path></g></g><filter id="__lottie_element_56" filterUnits="objectBoundingBox" x="0%" y="0%" width="100%" height="100%"><feComponentTransfer in="SourceGraphic"><feFuncA type="table" tableValues="1.0 0.0"></feFuncA></feComponentTransfer></filter><mask id="__lottie_element_53_2" mask-type="alpha"><g filter="url(#__lottie_element_56)"><rect width="128" height="128" x="0" y="0" fill="#ffffff" opacity="0"></rect><use xlink:href="#__lottie_element_53"></use></g></mask><clipPath id="__lottie_element_107"><path d="M0,0 L128,0 L128,128 L0,128z"></path></clipPath><mask id="__lottie_element_108"><rect fill="#ffffff" width="128" height="128" transform="matrix(1,0,0,1,-0.10346221923828125,0)"></rect><path fill="#000000" clip-rule="nonzero" d=" M128,-25.33300018310547 C128,-25.33300018310547 0,-25.33300018310547 0,-25.33300018310547 C0,-25.33300018310547 0,102.66699981689453 0,102.66699981689453 C0,102.66699981689453 128,102.66699981689453 128,102.66699981689453 C128,102.66699981689453 128,-25.33300018310547 128,-25.33300018310547" fill-opacity="1"></path></mask><g id="__lottie_element_113"><g style="display: block;" transform="matrix(1,0,0,1,98,102)" opacity="1"><path fill="rgb(255,213,0)" fill-opacity="1" d=" M0,-10 C5.519000053405762,-10 10,-5.519000053405762 10,0 C10,5.519000053405762 5.519000053405762,10 0,10 C-5.519000053405762,10 -10,5.519000053405762 -10,0 C-10,-5.519000053405762 -5.519000053405762,-10 0,-10z"></path></g></g><filter id="__lottie_element_116" filterUnits="objectBoundingBox" x="0%" y="0%" width="100%" height="100%"><feComponentTransfer in="SourceGraphic"><feFuncA type="table" tableValues="1.0 0.0"></feFuncA></feComponentTransfer></filter><mask id="__lottie_element_113_2" mask-type="alpha"><g filter="url(#__lottie_element_116)"><rect width="128" height="128" x="0" y="0" fill="#ffffff" opacity="0"></rect><use xlink:href="#__lottie_element_113"></use></g></mask><clipPath id="__lottie_element_118"><path d="M0,0 L128,0 L128,128 L0,128z"></path></clipPath><mask id="__lottie_element_119"><rect fill="#ffffff" width="128" height="128" transform="matrix(1,0,0,1,0,0)"></rect><path fill="#000000" clip-rule="nonzero" d=" M128,-25.33300018310547 C128,-25.33300018310547 0,-25.33300018310547 0,-25.33300018310547 C0,-25.33300018310547 0,102.66699981689453 0,102.66699981689453 C0,102.66699981689453 128,102.66699981689453 128,102.66699981689453 C128,102.66699981689453 128,-25.33300018310547 128,-25.33300018310547" fill-opacity="1"></path></mask><g id="__lottie_element_124"><g style="display: block;" transform="matrix(1,0,0,1,98,102)" opacity="1"><path fill="rgb(255,213,0)" fill-opacity="1" d=" M0,-10 C5.519000053405762,-10 10,-5.519000053405762 10,0 C10,5.519000053405762 5.519000053405762,10 0,10 C-5.519000053405762,10 -10,5.519000053405762 -10,0 C-10,-5.519000053405762 -5.519000053405762,-10 0,-10z"></path></g></g><filter id="__lottie_element_127" filterUnits="objectBoundingBox" x="0%" y="0%" width="100%" height="100%"><feComponentTransfer in="SourceGraphic"><feFuncA type="table" tableValues="1.0 0.0"></feFuncA></feComponentTransfer></filter><mask id="__lottie_element_124_2" mask-type="alpha"><g filter="url(#__lottie_element_127)"><rect width="128" height="128" x="0" y="0" fill="#ffffff" opacity="0"></rect><use xlink:href="#__lottie_element_124"></use></g></mask><clipPath id="__lottie_element_129"><path d="M0,0 L128,0 L128,128 L0,128z"></path></clipPath><g id="__lottie_element_132"><g style="display: none;" transform="matrix(1,0,0,1,44,161.99496459960938)" opacity="1"><path fill="rgb(255,0,0)" fill-opacity="1" d=" M64,-60 C64,-60 64,60 64,60 C64,62.20759963989258 62.20759963989258,64 60,64 C60,64 -60,64 -60,64 C-62.20759963989258,64 -64,62.20759963989258 -64,60 C-64,60 -64,-60 -64,-60 C-64,-62.20759963989258 -62.20759963989258,-64 -60,-64 C-60,-64 60,-64 60,-64 C62.20759963989258,-64 64,-62.20759963989258 64,-60z"></path></g></g><mask id="__lottie_element_132_1" mask-type="alpha"><use xlink:href="#__lottie_element_132"></use></mask><mask id="__lottie_element_145"><rect fill="#ffffff" width="128" height="128" transform="matrix(1,0,0,1,-108,-60)"></rect><path fill="#000000" clip-rule="nonzero" d=" M7.061999797821045,2.312000036239624 C7.061999797821045,2.312000036239624 -7.188000202178955,2.312000036239624 -7.188000202178955,2.312000036239624 C-7.188000202178955,2.312000036239624 -7.188000202178955,7.875 -7.188000202178955,7.875 C-7.188000202178955,7.875 7.061999797821045,7.875 7.061999797821045,7.875 C7.061999797821045,7.875 7.061999797821045,2.312000036239624 7.061999797821045,2.312000036239624" fill-opacity="1"></path></mask><g id="__lottie_element_147"><g style="display: block;" transform="matrix(1,0,0,1,114,62)" opacity="1"><path fill="rgb(255,129,0)" fill-opacity="1" d=" M0,-6 C3.3113999366760254,-6 6,-3.3113999366760254 6,0 C6,3.3113999366760254 3.3113999366760254,6 0,6 C-3.3113999366760254,6 -6,3.3113999366760254 -6,0 C-6,-3.3113999366760254 -3.3113999366760254,-6 0,-6z"></path></g></g><filter id="__lottie_element_150" filterUnits="objectBoundingBox" x="0%" y="0%" width="100%" height="100%"><feComponentTransfer in="SourceGraphic"><feFuncA type="table" tableValues="1.0 0.0"></feFuncA></feComponentTransfer></filter><mask id="__lottie_element_147_2" mask-type="alpha"><g filter="url(#__lottie_element_150)"><rect width="128" height="128" x="0" y="0" fill="#ffffff" opacity="0"></rect><use xlink:href="#__lottie_element_147"></use></g></mask><clipPath id="__lottie_element_152"><path d="M0,0 L128,0 L128,128 L0,128z"></path></clipPath><g id="__lottie_element_155"><g style="display: none;" transform="matrix(1,0,0,1,56,25)" opacity="1"><path fill="rgb(255,0,0)" fill-opacity="1" d=" M64,-60 C64,-60 64,60 64,60 C64,62.20759963989258 62.20759963989258,64 60,64 C60,64 -60,64 -60,64 C-62.20759963989258,64 -64,62.20759963989258 -64,60 C-64,60 -64,-60 -64,-60 C-64,-62.20759963989258 -62.20759963989258,-64 -60,-64 C-60,-64 60,-64 60,-64 C62.20759963989258,-64 64,-62.20759963989258 64,-60z"></path></g></g><mask id="__lottie_element_155_1" mask-type="alpha"><use xlink:href="#__lottie_element_155"></use></mask></defs><g clip-path="url(#__lottie_element_2)"><g clip-path="url(#__lottie_element_107)" style="display: none;" transform="matrix(1,0,0,1,0,0)" opacity="1"><g mask="url(#__lottie_element_108)"><g style="display: block;" mask="url(#__lottie_element_113_2)"><g transform="matrix(1,0,0,1,88,102)" opacity="1"><path fill="rgb(255,95,0)" fill-opacity="1" d=" M10,-10 C10,-10 10,10 10,10 C10,10 -10,10 -10,10 C-10,10 -10,-10 -10,-10 C-10,-10 10,-10 10,-10z"></path></g></g></g></g><g mask="url(#__lottie_element_10_1)"><g clip-path="url(#__lottie_element_7)" transform="matrix(1,0,0,1,0,0)" opacity="1"><g style="display: block;" transform="matrix(1,0,0,1,98,79)" opacity="1"><path fill="rgb(255,213,0)" fill-opacity="1" d=" M10,-23 C10,-23 10,23 10,23 C10,23 -10,23 -10,23 C-10,23 -10,-23 -10,-23 C-10,-23 10,-23 10,-23z"></path></g><g style="display: block;" transform="matrix(1,0,0,1,108,60)" opacity="1"><path fill="rgb(255,212,0)" fill-opacity="1" d=" M6,-4 C6,-4 6,4 6,4 C6,4 -6,4 -6,4 C-6,4 -6,-4 -6,-4 C-6,-4 6,-4 6,-4z"></path></g><g style="display: block;" transform="matrix(1,0,0,1,114,62)" opacity="1"><path fill="rgb(255,129,0)" fill-opacity="1" d=" M0,-6 C3.3113999366760254,-6 6,-3.3113999366760254 6,0 C6,3.3113999366760254 3.3113999366760254,6 0,6 C-3.3113999366760254,6 -6,3.3113999366760254 -6,0 C-6,-3.3113999366760254 -3.3113999366760254,-6 0,-6z"></path></g><g style="display: block;" transform="matrix(1,0,0,1,64,64)" opacity="1"><path fill="rgb(255,129,0)" fill-opacity="1" d=" M52,24 C52,24 38.05500030517578,24 38.05500030517578,24 C38.05500030517578,24 38.05500030517578,-2.6670000553131104 38.05500030517578,-2.6670000553131104 C38.05500030517578,-2.6670000553131104 56,-2.6670000553131104 56,-2.6670000553131104 C56,-2.6670000553131104 56,20 56,20 C56,22.208999633789062 54.20899963378906,24 52,24z"></path></g></g></g><g style="display: block;" mask="url(#__lottie_element_17_1)"><g clip-path="url(#__lottie_element_14)" transform="matrix(1,0,0,1,0,0)" opacity="1"><g style="display: block;" transform="matrix(1,0,0,1,88,102)" opacity="1"><path fill="rgb(255,95,0)" fill-opacity="1" d=" M10,-10 C10,-10 10,10 10,10 C10,10 -10,10 -10,10 C-10,10 -10,-10 -10,-10 C-10,-10 10,-10 10,-10z"></path></g><g style="display: block;" transform="matrix(1,0,0,1,98,102)" opacity="1"><path fill="rgb(255,213,0)" fill-opacity="1" d=" M0,-10 C5.519000053405762,-10 10,-5.519000053405762 10,0 C10,5.519000053405762 5.519000053405762,10 0,10 C-5.519000053405762,10 -10,5.519000053405762 -10,0 C-10,-5.519000053405762 -5.519000053405762,-10 0,-10z"></path></g><g style="display: block;" transform="matrix(1,0,0,1,95,79)" opacity="1"><path fill="rgb(255,213,0)" fill-opacity="1" d=" M13,-23 C13,-23 13,23 13,23 C13,23 -13,23 -13,23 C-13,23 -13,-23 -13,-23 C-13,-23 13,-23 13,-23z"></path></g><g style="display: block;" mask="url(#__lottie_element_53_2)"><g mask="url(#__lottie_element_51)" transform="matrix(1,0,0,1,108,60)" opacity="1"><path fill="rgb(255,212,0)" fill-opacity="1" d=" M6,-4 C6,-4 6,4 6,4 C6,4 -6,4 -6,4 C-6,4 -6,-4 -6,-4 C-6,-4 6,-4 6,-4z"></path></g></g></g></g><g clip-path="url(#__lottie_element_118)" style="display: none;" transform="matrix(1,0,0,1,0,0)" opacity="1"><g mask="url(#__lottie_element_119)"><g style="display: block;" mask="url(#__lottie_element_124_2)"><g transform="matrix(1,0,0,1,88,102)" opacity="1"><path fill="rgb(255,95,0)" fill-opacity="1" d=" M10,-10 C10,-10 10,10 10,10 C10,10 -10,10 -10,10 C-10,10 -10,-10 -10,-10 C-10,-10 10,-10 10,-10z"></path></g></g></g></g><g style="display: none;" mask="url(#__lottie_element_155_1)"><g clip-path="url(#__lottie_element_152)" transform="matrix(1,0,0,1,0,0)" opacity="1"><g style="display: block;" transform="matrix(1,0,0,1,98,79)" opacity="1"><path fill="rgb(255,213,0)" fill-opacity="1" d=" M10,-23 C10,-23 10,23 10,23 C10,23 -10,23 -10,23 C-10,23 -10,-23 -10,-23 C-10,-23 10,-23 10,-23z"></path></g><g style="display: block;" transform="matrix(1,0,0,1,108,60)" opacity="1"><path fill="rgb(255,212,0)" fill-opacity="1" d=" M6,-4 C6,-4 6,4 6,4 C6,4 -6,4 -6,4 C-6,4 -6,-4 -6,-4 C-6,-4 6,-4 6,-4z"></path></g><g style="display: block;" transform="matrix(1,0,0,1,114,62)" opacity="1"><path fill="rgb(255,129,0)" fill-opacity="1" d=" M0,-6 C3.3113999366760254,-6 6,-3.3113999366760254 6,0 C6,3.3113999366760254 3.3113999366760254,6 0,6 C-3.3113999366760254,6 -6,3.3113999366760254 -6,0 C-6,-3.3113999366760254 -3.3113999366760254,-6 0,-6z"></path></g><g style="display: block;" transform="matrix(1,0,0,1,64,64)" opacity="1"><path fill="rgb(255,129,0)" fill-opacity="1" d=" M52,24 C52,24 38.05500030517578,24 38.05500030517578,24 C38.05500030517578,24 38.05500030517578,-2.6670000553131104 38.05500030517578,-2.6670000553131104 C38.05500030517578,-2.6670000553131104 56,-2.6670000553131104 56,-2.6670000553131104 C56,-2.6670000553131104 56,20 56,20 C56,22.208999633789062 54.20899963378906,24 52,24z"></path></g></g></g><g style="display: none;" mask="url(#__lottie_element_132_1)"><g clip-path="url(#__lottie_element_129)" transform="matrix(1,0,0,1,0,0)" opacity="1"><g style="display: block;" transform="matrix(1,0,0,1,88,102)" opacity="1"><path fill="rgb(255,95,0)" fill-opacity="1" d=" M10,-10 C10,-10 10,10 10,10 C10,10 -10,10 -10,10 C-10,10 -10,-10 -10,-10 C-10,-10 10,-10 10,-10z"></path></g><g style="display: block;" transform="matrix(1,0,0,1,98,102)" opacity="1"><path fill="rgb(255,213,0)" fill-opacity="1" d=" M0,-10 C5.519000053405762,-10 10,-5.519000053405762 10,0 C10,5.519000053405762 5.519000053405762,10 0,10 C-5.519000053405762,10 -10,5.519000053405762 -10,0 C-10,-5.519000053405762 -5.519000053405762,-10 0,-10z"></path></g><g style="display: block;" transform="matrix(1,0,0,1,95,79)" opacity="1"><path fill="rgb(255,213,0)" fill-opacity="1" d=" M13,-23 C13,-23 13,23 13,23 C13,23 -13,23 -13,23 C-13,23 -13,-23 -13,-23 C-13,-23 13,-23 13,-23z"></path></g><g style="display: block;" mask="url(#__lottie_element_147_2)"><g mask="url(#__lottie_element_145)" transform="matrix(1,0,0,1,108,60)" opacity="1"><path fill="rgb(255,212,0)" fill-opacity="1" d=" M6,-4 C6,-4 6,4 6,4 C6,4 -6,4 -6,4 C-6,4 -6,-4 -6,-4 C-6,-4 6,-4 6,-4z"></path></g></g></g></g><g style="display: block;" transform="matrix(1,0,0,1,64,64)" opacity="1"><path fill="rgb(255,95,0)" fill-opacity="1" d=" M23.983999252319336,48 C23.983999252319336,48 -52,48 -52,48 C-54.20899963378906,48 -56,46.20899963378906 -56,44 C-56,44 -56,-44 -56,-44 C-56,-46.20899963378906 -54.20899963378906,-48 -52,-48 C-52,-48 20,-48 20,-48 C22.208999633789062,-48 24,-46.20899963378906 24,-44 C24,-44 24,47.98400115966797 24,47.98400115966797 C24,47.99300003051758 23.993000030517578,48 23.983999252319336,48z"></path></g><g style="display: block;" transform="matrix(1,0,0,1,32,36)" opacity="1"><path fill="rgb(255,213,0)" fill-opacity="1" d=" M12,-4 C12,-4 12,4 12,4 C12,4 -12,4 -12,4 C-12,4 -12,-4 -12,-4 C-12,-4 12,-4 12,-4z"></path></g><g style="display: block;" transform="matrix(1,0,0,1,48,50)" opacity="1"><path fill="rgb(255,213,0)" fill-opacity="1" d=" M28,-4 C28,-4 28,4 28,4 C28,4 -28,4 -28,4 C-28,4 -28,-4 -28,-4 C-28,-4 28,-4 28,-4z"></path></g><g style="display: block;" transform="matrix(1,0,0,1,48,64)" opacity="1"><path fill="rgb(255,213,0)" fill-opacity="1" d=" M28,-4 C28,-4 28,4 28,4 C28,4 -28,4 -28,4 C-28,4 -28,-4 -28,-4 C-28,-4 28,-4 28,-4z"></path></g></g></svg>
                            <div class="desc">
                                <h5>Parental guide</h5>
                                <p>
                                    보호자 여러분들의 문의와<br>
                                    궁금증에 상세히 답 해드립니다
                                </p>
                            </div>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 128 128" width="128" height="128" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);" preserveAspectRatio="xMidYMid meet"><defs><clipPath id="__lottie_element_58"><rect width="128" height="128" x="0" y="0"></rect></clipPath></defs><g clip-path="url(#__lottie_element_58)"><g style="display: block;" transform="matrix(1,0,0,1,64,64)" opacity="1"><path fill="rgb(255,129,0)" fill-opacity="1" d=" M-52,-12 C-54.20899963378906,-12 -56,-10.208999633789062 -56,-8 C-56,-8 -56,36 -56,36 C-56,38.20899963378906 -54.20899963378906,40 -52,40 C-52,40 -42,40 -42,40 C-40.89500045776367,40 -40,40.89500045776367 -40,42 C-40,42 -40,54.99800109863281 -40,54.99800109863281 C-40,55.98899841308594 -38.7140007019043,56.37699890136719 -38.16699981689453,55.55099868774414 C-38.16699981689453,55.55099868774414 -28.600000381469727,40.79999923706055 -28.600000381469727,40.79999923706055 C-28.222000122070312,40.29600143432617 -27.6299991607666,40 -27,40 C-27,40 12,40 12,40 C14.208999633789062,40 16,38.20899963378906 16,36 C16,36 16,-8 16,-8 C16,-10.208999633789062 14.208999633789062,-12 12,-12 C12,-12 -52,-12 -52,-12z"></path></g><g style="display: block;" transform="matrix(1,0,0,1,32,78)" opacity="1"><path fill="rgb(255,213,0)" fill-opacity="1" d=" M0,-4 C2.2076001167297363,-4 4,-2.2076001167297363 4,0 C4,2.2076001167297363 2.2076001167297363,4 0,4 C-2.2076001167297363,4 -4,2.2076001167297363 -4,0 C-4,-2.2076001167297363 -2.2076001167297363,-4 0,-4z"></path></g><g style="display: block;" transform="matrix(1,0,0,1,44,78)" opacity="1"><path fill="rgb(255,213,0)" fill-opacity="1" d=" M0,-4 C2.2076001167297363,-4 4,-2.2076001167297363 4,0 C4,2.2076001167297363 2.2076001167297363,4 0,4 C-2.2076001167297363,4 -4,2.2076001167297363 -4,0 C-4,-2.2076001167297363 -2.2076001167297363,-4 0,-4z"></path></g><g style="display: block;" transform="matrix(1,0,0,1,56,78)" opacity="1"><path fill="rgb(255,213,0)" fill-opacity="1" d=" M0,-4 C2.2076001167297363,-4 4,-2.2076001167297363 4,0 C4,2.2076001167297363 2.2076001167297363,4 0,4 C-2.2076001167297363,4 -4,2.2076001167297363 -4,0 C-4,-2.2076001167297363 -2.2076001167297363,-4 0,-4z"></path></g><g style="display: block;" transform="matrix(1,0,0,1,64,64)" opacity="1"><path fill="rgb(255,95,0)" fill-opacity="1" d=" M-16,-44 C-16,-44 -16,0 -16,0 C-16,2.2090001106262207 -14.208999633789062,4 -12,4 C-12,4 27,4 27,4 C27.6299991607666,4 28.222000122070312,4.296000003814697 28.600000381469727,4.800000190734863 C28.600000381469727,4.800000190734863 38.16699981689453,19.551000595092773 38.16699981689453,19.551000595092773 C38.7140007019043,20.37700080871582 40,19.98900032043457 40,18.99799919128418 C40,18.99799919128418 40,6 40,6 C40,4.894999980926514 40.89500045776367,4 42,4 C42,4 52,4 52,4 C54.20899963378906,4 56,2.2090001106262207 56,0 C56,0 56,-44 56,-44 C56,-46.20899963378906 54.20899963378906,-48 52,-48 C52,-48 -12,-48 -12,-48 C-14.208999633789062,-48 -16,-46.20899963378906 -16,-44z"></path></g><g style="display: block;" transform="matrix(1,0,0,1,64,64)" opacity="1"><path fill="rgb(255,213,0)" fill-opacity="1" d=" M11.484999656677246,-12 C10.218999862670898,-12 9.222000122070312,-13.17199993133545 9.524999618530273,-14.401000022888184 C10.600000381469727,-18.763999938964844 14.539999961853027,-22 19.235000610351562,-22 C23.93000030517578,-22 27.8700008392334,-18.763999938964844 28.94499969482422,-14.401000022888184 C29.24799919128418,-13.17199993133545 28.25200080871582,-12 26.986000061035156,-12 C26.986000061035156,-12 11.484999656677246,-12 11.484999656677246,-12z"></path></g><g style="display: block;" transform="matrix(1,0,0,1,64,64)" opacity="1"><path fill="rgb(255,213,0)" fill-opacity="1" d=" M25.235000610351562,-30 C25.235000610351562,-26.68600082397461 22.548999786376953,-24 19.235000610351562,-24 C15.920999526977539,-24 13.234999656677246,-26.68600082397461 13.234999656677246,-30 C13.234999656677246,-33.31399917602539 15.920999526977539,-36 19.235000610351562,-36 C22.548999786376953,-36 25.235000610351562,-33.31399917602539 25.235000610351562,-30z"></path></g></g></svg>
                            <div class="desc">
                                <h5>Support</h5>
                                <p>
                                    서비스 이용 중 겪는 불편을<br>
                                    신속히 해결 해드립니다
                                </p>
                            </div>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 128 128" width="128" height="128" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);" preserveAspectRatio="xMidYMid meet"><defs><clipPath id="__lottie_element_81"><rect width="128" height="128" x="0" y="0"></rect></clipPath></defs><g clip-path="url(#__lottie_element_81)"><g style="display: block;" transform="matrix(1,0,0,1,64,64)" opacity="1"><path fill="rgb(255,95,0)" fill-opacity="1" d=" M-1.940000057220459,-27.392000198364258 C-1.940000057220459,-27.392000198364258 -48,-15.939000129699707 -48,-15.939000129699707 C-48,-15.939000129699707 -48,20.12299919128418 -48,20.12299919128418 C-48,20.12299919128418 0,20.12299919128418 0,20.12299919128418 C0,20.12299919128418 48,20.12299919128418 48,20.12299919128418 C48,20.12299919128418 48,-15.939000129699707 48,-15.939000129699707 C48,-15.939000129699707 1.940000057220459,-27.392000198364258 1.940000057220459,-27.392000198364258 C0.6660000085830688,-27.709999084472656 -0.6660000085830688,-27.709999084472656 -1.940000057220459,-27.392000198364258z"></path></g><g style="display: block;" transform="matrix(1,0,0,1,64,72.4000015258789)" opacity="1"><path fill="rgb(255,213,0)" fill-opacity="1" d=" M0,-24 C13.245599746704102,-24 24,-13.245599746704102 24,0 C24,13.245599746704102 13.245599746704102,24 0,24 C-13.245599746704102,24 -24,13.245599746704102 -24,0 C-24,-13.245599746704102 -13.245599746704102,-24 0,-24z"></path></g><g style="display: block;" transform="matrix(1,0,0,1,64,64)" opacity="1"><path fill="rgb(255,212,0)" fill-opacity="1" d=" M0.6700000166893005,-19.954999923706055 C0.289000004529953,-19.611000061035156 -0.289000004529953,-19.611000061035156 -0.6700000166893005,-19.954999923706055 C-0.6700000166893005,-19.954999923706055 -2.049999952316284,-21.200000762939453 -2.049999952316284,-21.200000762939453 C-5.583000183105469,-24.433000564575195 -8.5,-27.225000381469727 -10.800000190734863,-29.575000762939453 C-13.100000381469727,-31.924999237060547 -14.932999610900879,-34.025001525878906 -16.299999237060547,-35.875 C-17.66699981689453,-37.724998474121094 -18.625,-39.400001525878906 -19.174999237060547,-40.900001525878906 C-19.725000381469727,-42.400001525878906 -20,-43.91699981689453 -20,-45.45000076293945 C-20,-48.45000076293945 -18.992000579833984,-50.95800018310547 -16.975000381469727,-52.974998474121094 C-14.958000183105469,-54.992000579833984 -12.467000007629395,-56 -9.5,-56 C-7.599999904632568,-56 -5.8420000076293945,-55.54999923706055 -4.224999904632568,-54.650001525878906 C-2.6080000400543213,-53.75 -1.2000000476837158,-52.45000076293945 0,-50.75 C1.399999976158142,-52.54999923706055 2.882999897003174,-53.875 4.449999809265137,-54.724998474121094 C6.017000198364258,-55.57500076293945 7.699999809265137,-56 9.5,-56 C12.467000007629395,-56 14.958000183105469,-54.992000579833984 16.975000381469727,-52.974998474121094 C18.992000579833984,-50.95800018310547 20,-48.45000076293945 20,-45.45000076293945 C20,-43.91699981689453 19.725000381469727,-42.400001525878906 19.174999237060547,-40.900001525878906 C18.625,-39.400001525878906 17.66699981689453,-37.724998474121094 16.299999237060547,-35.875 C14.932999610900879,-34.025001525878906 13.100000381469727,-31.924999237060547 10.800000190734863,-29.575000762939453 C8.5,-27.225000381469727 5.583000183105469,-24.433000564575195 2.049999952316284,-21.200000762939453 C2.049999952316284,-21.200000762939453 0.6700000166893005,-19.954999923706055 0.6700000166893005,-19.954999923706055z"></path></g><g style="display: block;" transform="matrix(-1,0,0,1,64,64)" opacity="1"><path fill="rgb(255,95,0)" fill-opacity="1" d=" M-48,-15.751999855041504 C-48,-15.751999855041504 -48,41 -48,41 C-48,42.834999084472656 -46.750999450683594,44.43600082397461 -44.970001220703125,44.88100051879883 C-44.970001220703125,44.88100051879883 -0.9700000286102295,55.88100051879883 -0.9700000286102295,55.88100051879883 C-0.6510000228881836,55.96099853515625 -0.32600000500679016,56 0,56 C0,56 0,-2.877000093460083 0,-2.877000093460083 C0,-2.877000093460083 -48,-15.751999855041504 -48,-15.751999855041504z"></path></g><g style="display: block;" transform="matrix(0.7071067690849304,-0.19490504264831543,0.5416752099990845,0.767193078994751,88.0416259765625,54.62677001953125)" opacity="1"><path fill="rgb(255,129,0)" fill-opacity="1" d=" M34,0 C34,0 34,16 34,16 C34,16 -34,16 -34,16 C-34,16 -34,0 -34,0 C-34,0 34,0 34,0z M34,8 C34,8 34,18 34,18 C34,22.415199279785156 30.415199279785156,26 26,26 C26,26 -26,26 -26,26 C-30.415199279785156,26 -34,22.415199279785156 -34,18 C-34,18 -34,8 -34,8 C-34,3.5848000049591064 -30.415199279785156,0 -26,0 C-26,0 26,0 26,0 C30.415199279785156,0 34,3.5848000049591064 34,8z"></path></g><g style="display: block;" transform="matrix(1,0,0,1,64,64)" opacity="1"><path fill="rgb(255,129,0)" fill-opacity="1" d=" M-48,-15.751999855041504 C-48,-15.751999855041504 -48,41 -48,41 C-48,42.834999084472656 -46.750999450683594,44.43600082397461 -44.970001220703125,44.88100051879883 C-44.970001220703125,44.88100051879883 -0.9700000286102295,55.88100051879883 -0.9700000286102295,55.88100051879883 C-0.6510000228881836,55.96099853515625 -0.32600000500679016,56 0,56 C0,56 0,-2.877000093460083 0,-2.877000093460083 C0,-2.877000093460083 -48,-15.751999855041504 -48,-15.751999855041504z"></path></g><g style="display: block;" transform="matrix(0.7071067690849304,0.19490504264831543,-0.5416752696037292,0.7671930193901062,39.958370208740234,54.62677001953125)" opacity="1"><path fill="rgb(255,129,0)" fill-opacity="1" d=" M34,0 C34,0 34,16 34,16 C34,16 -34,16 -34,16 C-34,16 -34,0 -34,0 C-34,0 34,0 34,0z M34,8 C34,8 34,18 34,18 C34,22.415199279785156 30.415199279785156,26 26,26 C26,26 -26,26 -26,26 C-30.415199279785156,26 -34,22.415199279785156 -34,18 C-34,18 -34,8 -34,8 C-34,3.5848000049591064 -30.415199279785156,0 -26,0 C-26,0 26,0 26,0 C30.415199279785156,0 34,3.5848000049591064 34,8z"></path></g></g></svg>
                            <div class="desc">
                                <h5>Fan kit</h5>
                                <p>
                                    전 세계 팬 여러분들을 위해 준비한<br>
                                    선물을 만나보세요
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="goyong">
            <div class="container wrap" data-aos="fade-up">
                <div class="container-sub">
                    <div>
                        <h4>JOIN OUR BRAVE<br>JOURNEY</h4>
                        <p>데브시스터즈의 용감한 여정에 합류할 여러분들을 기다립니다</p>
                    </div>
                    <div class="wrap marT50">
                        <a href="" class="all">SEE CAREER</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- 하단 -->
    <?php include 'footer.html' ?>    
</body>
</html>