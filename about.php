<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/title.css">
    <link rel="stylesheet" href="css/about/about.css">
    <link rel="stylesheet" href="css/about/responsive.css">
    <title>Devsisters-about</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ADLaM+Display&family=Noto+Serif+KR&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" type="text/javascript"></script>
    
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            var myElement = $('#about .container-sub');
            var translateXValue = -100;

            function moveElement() {                
                translateXValue -= 4;

                myElement.css('transform', 'translateX(' + translateXValue + 'px)');
            }

            setInterval(moveElement, 100);

            var ws = $(window).scrollTop();
            var headerY = $("header").offset().top;
            var headerH = $("header").height();
            var aboutmotion = $('.about-motion').offset().top-headerY-headerH;

            $(window).scroll(function() {
                var scrollup = $(window).scrollTop() >= ws;
                ws = $(window).scrollTop();
                
                if (ws > aboutmotion && scrollup) {
                    $('.cookie').attr('src', 'img/about/brave-cookie.gif');
                } else {
                    $('.cookie').attr('src', 'img/about/brave-cookie_b.gif');
                }
            });

            $("li.hide").hide();

            $(".brave").click(function(){
                $("li.hide").show();
            });

            AOS.init();
        });
    </script>

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
    <!-- 단 -->
     <!-- 상단 -->
    <?php include 'header.html' ?>   
    <!-- 타이틀 -->
    <div id="title">
        <div class="vi">
            <video muted autoplay loop>
                <source src="video/about/about-kv.mp4" type="video/mp4">
            </video>
        </div>
        <div class="container wrap">
            <h2>
                <span>HELLO, THIS IS</span>
                <br>
                <span>DEVSISTERS</span>
            </h2>
        </div>
    </div>  
    <!-- about -->
    <main id="about">
        <section>
            <div class="container wrap" data-aos="fade-up">
                <h3>WHO WE ARE</h3>
                <div>
                    <p>
                        데브시스터즈는 대한민국 본사를 비롯한 총 5개의 글로벌 오피스, 3개의 개발 스튜디오, 1개의 투자 전문 자회사로 이뤄져있으며,<br> 
                        약 800명의 구성원들이 전 세계 고객들에게 오랜 시간 사랑받고 기억에 남을 경험을 만들기 위해 노력하고 있습니다.
                    </p>
                    <br><br>
                    <p>
                        2007년 설립 이후 쿠키런 IP를 중심으로 전 세계 2억 명 이상의 유저들에게 꾸준히 사랑받는 게임과 서비스를 제공해오고 있으며,<br>
                        모바일은 물론 PC, 콘솔, VR 등 다양한 플랫폼으로 그 영향력을 확대하고 있습니다. 뿐만 아니라 애니메이션, 라이선싱 등 새로운<br>
                        사업 분야로의 진출을 이어나가고 있으며, 사이드스크롤 온라인 슈팅, 샌드박스 시티 빌딩 등 색다른 장르의 글로벌 게임 프로젝트와<br>
                        다양한 신규 IP 확보에 주력하고 있습니다.
                    </p>
                </div>
                <div>
                    <ul>
                        <li>
                            <h4>800
                                <span>+</span>
                            </h4>
                            <span>구성원</span>
                        </li>
                        <li>
                            <h4>3</h4>
                            <span>스튜디오</span>
                        </li>
                        <li>
                            <h4>5</h4>
                            <span>글로벌 오피스</span>
                        </li>
                        <li>
                            <h4>4</h4>
                            <span>주요 라이브 서비스</span>
                        </li>
                        <li>
                            <h4>200
                                <span>+</span>
                            </h4>
                            <span>이용국가</span>
                        </li>
                        <li>
                            <h4>200M
                                <span>+</span>
                            </h4>
                            <span>누적이용자 (2억명 이상)</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container-sub">
                <div>
                    <img src="img/about/about01.webp" alt="">
                </div>
                <div>
                    <img src="img/about/about01.webp" alt="">
                </div>
            </div>
        </section>
        <section>
            <div class="container wrap" data-aos="fade-up">
                <h3>WHAT WE BELIEVE</h3>
                <div>
                    <p>
                        문화, 기술, 철학 등 인간 세상이 지난 수 천년 간 꾸준히 발전했던 이유는 더 나은 세상을 위해 다양한 분야에서 끊임없이<br>
                        노력하고 고민하는 사람들이 늘 존재했기 때문입니다.
                    </p>
                    <br><br>
                    <p>
                        지금까지의 역사를 만든 과거 전 세계의 선인들이 그러했듯, 현재 최고의 역사를 만들어 가고 있는 전 세계의 창조자들이<br>
                        그러하듯, 데브시스터즈 또한 세상을 위한 의미있는 것들을 만들기 위해 노력하는 사람들이 모인 곳입니다.
                    </p>
                    <br><br>
                    <p>
                        이러한 우리의 노력으로 탄생된 작품 쿠키런은 모험, 즐거움, 상상력, 다양성에 대한 설레는 이야기를 세상에<br>
                        들려줌으로써 사람들의 즐거운 삶과 생각의 확장에 기여하고 있습니다. 또한 수십 년을 넘어 반 세기, 한 세기동안 즐거움과<br>
                        이야기를 전해주며 전 세계 많은 사람들의 삶의 ‘친구’가 될 것이라고 믿습니다. 그리고 앞으로도 우리는 쿠키런의 탄생처럼<br>
                        지속적인 창발적 도전을 통해 새로운 작품들과 서비스들을 끊임없이 탄생시킬 것입니다.
                    </p>
                    <br><br>
                    <p>
                        데브시스터즈의 존재 가치에 대한 정신과 시스템이 공고히 유지되는 한, 이 노력은 앞으로도 꾸준히 계속 될 것입니다.<br> 
                        뿐만 아니라 우리가 만든 수많은 것들이 인간 사회를 더 좋게 만들고, 그 성과가 더 커질수록 더 좋은 세상이 되는 일에<br>
                        더 큰 기여를 하게 될 것이라 믿습니다.
                    </p>
                </div>
            </div>
            <div class="container-sub">
                <div>
                    <img src="img/about/about02.webp" alt="">
                </div>
                <div>
                    <img src="img/about/about02.webp" alt="">
                </div>
            </div>
        </section>
        <section>
            <div class="container wrap" data-aos="fade-up">
                <h3>WE ARE AROUND<br>
                    THE WORLD</h3>
                <div>
                    <p>
                        다양한 세대, 문화, 언어에 걸친 두터운 글로벌 팬덤을 보유한 데브시스터즈는<br>
                        전 세계 곳곳의 고객들에게 더욱 탁월한 경험을 제공하기 위해 아시아, 유럽, 미주 등<br>
                        주요 거점 지역에서 총 5개의 오피스를 운영하고 있습니다.
                    </p>
                </div>
                <div>
                    <video muted autoplay loop>
                        <source src="video/about/about-world.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </section>
        <section>
            <div class="container wrap" data-aos="fade-up">
                <h3>OUR VALUES</h3>
                <div>
                    <p>
                        우리의 일, 제품, 사람, 문화 이 모든 것의 기준 ‘핵심가치'를 소개합니다.
                    </p>
                </div>
                <div>
                    <ul>
                        <li>
                            <h4>고객 경험 중심
                            </h4>
                            <span>
                                고객의 모든 순간이 탁월한 경험이 될 수<br>
                                있도록 끈기 있게 파고듭니다.
                            </span>
                        </li>
                        <li>
                            <h4>담대한 도전</h4>
                            <span>지구적 사고로 목표를 세우고 달성합니다.</span>
                        </li>
                        <li>
                            <h4>신뢰받을 자격</h4>
                            <span>
                                훌륭한 태도와 전문적인 역량으로<br>
                                서로에게 믿음을 주는 동료가 됩니다.
                            </span>
                        </li>
                        <li>
                            <h4>주도적인 개선</h4>
                            <span>
                                발견한 문제는 근본적인<br>
                                원인까지 찾아 즉시 해결합니다.
                            </span>
                        </li>
                        <li>
                            <h4>용기 있는 소통</h4>
                            <span>
                                솔직한 의견 공유로<br>
                                최선의 답을 함께 찾아냅니다.
                            </span>
                        </li>
                        <li>
                            <h4>팀의 승리</h4>
                            <span>
                                자신의 역할에 충실하고 동료의 역할을 이해하며<br>
                                부족한 것은 함께 채워 미션을 성공시킵니다.
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section>
            <div class="container wrap" data-aos="fade-up">
                <h3>BRAVE JOURNEY</h3>
                <div class="about-motion">
                    <ul>
                        <li class="journey brave1">
                            <div>
                                <h4>2023</h4>
                                <span>
                                    FEB
                                    <p>사이드스크롤 온라인 슈팅 ‘데드 사이드 클럽’ 스팀 얼리엑세스</p>
                                </span>
                                <figure>
                                    <img src="img/about/2023-feb.webp" style="width:512px;" alt="">
                                    <figcaption>유럽 현지 법인 ‘데브시스터즈 EUROPE’ 설립</figcaption>
                                </figure>
                                <span>NOV
                                    <p>제 59회 무역의날 7천만불 수출의탑, 서비스탑 수상</p>
                                </span>
                                <span>
                                    SEP
                                    쿠키런 게임 프랜차이즈 통합 글로벌 누적 이용자 수 2억명 돌파
                                </span>
                                <figure>
                                    <img src="img/about/2022-sep.webp" style="width:512px;" alt="">
                                    <!-- <figcaption>유럽 현지 법인 ‘데브시스터즈 EUROPE’ 설립</figcaption> -->
                                </figure>
                            </div>
                            <div class="gu"></div>
                        </li>
                    </ul>
                    <div class="ruler">
                        <span>
                            <img class="cookie" src="img/about/brave-cookie.gif" style="width:120px;height: 120px;" alt="달리는쿠키">
                        </span>
                    </div>
                    <ul>
                        <li class="journey brave2">
                            <div>
                                <h4>2022</h4>
                                <span>
                                    DEC
                                    <p>‘데브시스터즈’ Pocket Gamer Awards 2022</p>
                                </span>
                                <figure>
                                    <img src="img/about/2022-feb.webp" style="width:512px;" alt="">
                                    <figcaption>쿠키런: 오븐브레이크’ 구글플레이 2022<br>·올해를 빛낸 장수 게임 우수상 수상</figcaption>
                                </figure>
                            </div>
                            <div class="gu"></div>
                        </li>
                        <li class="journey brave2 hide">
                            <div>
                                <h4>2021</h4>
                                <span>
                                    DEC
                                    <p>‘데브시스터즈’ Pocket Gamer Awards 2022</p>
                                </span>
                                <figure>
                                    <img src="img/about/2022-feb.webp" style="width:512px;" alt="">
                                    <figcaption>쿠키런: 오븐브레이크’ 구글플레이 2022<br>·올해를 빛낸 장수 게임 우수상 수상</figcaption>
                                </figure>
                            </div>
                            <div class="gu"></div>
                        </li>
                    </ul>
                </div>
                <div class="marT20">
                    <button href="" class="more brave">MORE</button>
                </div>
            </div>
        </section>
        <section id="news">
            <div class="container wrap">
                <h3>RELATED NEWS</h3>
                <div>
                    <span>이투데이 / 2023.03.31</span>
                    <div>
                        <a href="">
                            데브시스터즈, 창유·텐센트 게임즈 손잡고 중국 진출 나선다
                            <svg>
                                <path d="M13.8482 1.23443C13.7518 1.00122 13.6092 0.782561 13.4207 0.59233C13.4164 0.587958 13.412 0.583605 13.4077 0.579273C13.0463 0.221174 12.549 0 12 0H11.9997H4C2.89543 0 2 0.89543 2 2C2 3.10457 2.89543 4 4 4H7.17157L0.585786 10.5858C-0.195262 11.3668 -0.195262 12.6332 0.585786 13.4142C1.36684 14.1953 2.63317 14.1953 3.41421 13.4142L10 6.82843V10C10 11.1046 10.8954 12 12 12C13.1046 12 14 11.1046 14 10V2C14 1.72882 13.946 1.47025 13.8482 1.23443Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div>
                    <span>디스이즈게임 / 2022.12.20</span>
                    <div>
                        <a href="">
                            데브시스터즈, ‘포켓게이머 어워드 2022’ 3관왕 수상
                            <svg>
                                <path d="M13.8482 1.23443C13.7518 1.00122 13.6092 0.782561 13.4207 0.59233C13.4164 0.587958 13.412 0.583605 13.4077 0.579273C13.0463 0.221174 12.549 0 12 0H11.9997H4C2.89543 0 2 0.89543 2 2C2 3.10457 2.89543 4 4 4H7.17157L0.585786 10.5858C-0.195262 11.3668 -0.195262 12.6332 0.585786 13.4142C1.36684 14.1953 2.63317 14.1953 3.41421 13.4142L10 6.82843V10C10 11.1046 10.8954 12 12 12C13.1046 12 14 11.1046 14 10V2C14 1.72882 13.946 1.47025 13.8482 1.23443Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div>
                    <span>게임포커스 / 2022.11.18</span>
                    <div>
                        <a href="">
                            데브시스터즈 '쿠키런: 킹덤 홀리데이 기프트 박스' 기부 펀딩 진행
                            <svg>
                                <path d="M13.8482 1.23443C13.7518 1.00122 13.6092 0.782561 13.4207 0.59233C13.4164 0.587958 13.412 0.583605 13.4077 0.579273C13.0463 0.221174 12.549 0 12 0H11.9997H4C2.89543 0 2 0.89543 2 2C2 3.10457 2.89543 4 4 4H7.17157L0.585786 10.5858C-0.195262 11.3668 -0.195262 12.6332 0.585786 13.4142C1.36684 14.1953 2.63317 14.1953 3.41421 13.4142L10 6.82843V10C10 11.1046 10.8954 12 12 12C13.1046 12 14 11.1046 14 10V2C14 1.72882 13.946 1.47025 13.8482 1.23443Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div>
                    <span>인벤 / 2022.10.13</span>
                    <div>
                        <a href="">
                            쿠키런: 킹덤, 방탄소년단과 콜라보 진행
                            <svg>
                                <path d="M13.8482 1.23443C13.7518 1.00122 13.6092 0.782561 13.4207 0.59233C13.4164 0.587958 13.412 0.583605 13.4077 0.579273C13.0463 0.221174 12.549 0 12 0H11.9997H4C2.89543 0 2 0.89543 2 2C2 3.10457 2.89543 4 4 4H7.17157L0.585786 10.5858C-0.195262 11.3668 -0.195262 12.6332 0.585786 13.4142C1.36684 14.1953 2.63317 14.1953 3.41421 13.4142L10 6.82843V10C10 11.1046 10.8954 12 12 12C13.1046 12 14 11.1046 14 10V2C14 1.72882 13.946 1.47025 13.8482 1.23443Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div>
                    <span>머니투데이 / 2022.09.15</span>
                    <div>
                        <a href="">
                            9살 된 '쿠키런', 전세계 2억명 반했다
                            <svg>
                                <path d="M13.8482 1.23443C13.7518 1.00122 13.6092 0.782561 13.4207 0.59233C13.4164 0.587958 13.412 0.583605 13.4077 0.579273C13.0463 0.221174 12.549 0 12 0H11.9997H4C2.89543 0 2 0.89543 2 2C2 3.10457 2.89543 4 4 4H7.17157L0.585786 10.5858C-0.195262 11.3668 -0.195262 12.6332 0.585786 13.4142C1.36684 14.1953 2.63317 14.1953 3.41421 13.4142L10 6.82843V10C10 11.1046 10.8954 12 12 12C13.1046 12 14 11.1046 14 10V2C14 1.72882 13.946 1.47025 13.8482 1.23443Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="marT20 text-center">
                    <button href="" class="more">MORE</button>
                </div>
            </div>
        </section>
    </main>
    <!-- 하단 -->
    <?php include 'footer.html' ?>
</body>
</html>