$(document).ready(function(){

    const canvas = document.getElementById('motion');
    const ctx = canvas.getContext('2d');

// 이미지들을 저장할 배열
    const images = [];
    let currentImageIndex = 0;
    const imageFadeDuration = 25; // 이미지가 변경되는 간격 (밀리초)

    function loadImage(src) {
        const img = new Image();
        img.src = src;
        images.push(img);
    }

    loadImage('img/home-hero-sq-000.webp');
    loadImage('img/home-hero-sq-001.webp');
    loadImage('img/home-hero-sq-002.webp');
    loadImage('img/home-hero-sq-003.webp');
    loadImage('img/home-hero-sq-004.webp');
    loadImage('img/home-hero-sq-005.webp');
    loadImage('img/home-hero-sq-006.webp');
    loadImage('img/home-hero-sq-007.webp');
    loadImage('img/home-hero-sq-008.webp');
    loadImage('img/home-hero-sq-009.webp');
    loadImage('img/home-hero-sq-010.webp');
    loadImage('img/home-hero-sq-011.webp');
    loadImage('img/home-hero-sq-012.webp');
    loadImage('img/home-hero-sq-013.webp');
    loadImage('img/home-hero-sq-014.webp');
    loadImage('img/home-hero-sq-015.webp');
    loadImage('img/home-hero-sq-016.webp');
    loadImage('img/home-hero-sq-017.webp');
    loadImage('img/home-hero-sq-018.webp');
    loadImage('img/home-hero-sq-019.webp');
    loadImage('img/home-hero-sq-020.webp');
    loadImage('img/home-hero-sq-021.webp');
    loadImage('img/home-hero-sq-022.webp');
    loadImage('img/home-hero-sq-023.webp');
    loadImage('img/home-hero-sq-024.webp');
    loadImage('img/home-hero-sq-025.webp');
    loadImage('img/home-hero-sq-026.webp');
    loadImage('img/home-hero-sq-027.webp');
    loadImage('img/home-hero-sq-028.webp');
    loadImage('img/home-hero-sq-029.webp');
    loadImage('img/home-hero-sq-030.webp');
    loadImage('img/home-hero-sq-031.webp');
    loadImage('img/home-hero-sq-032.webp');
    loadImage('img/home-hero-sq-033.webp');
    loadImage('img/home-hero-sq-034.webp');
    loadImage('img/home-hero-sq-035.webp');
    loadImage('img/home-hero-sq-036.webp');
    loadImage('img/home-hero-sq-037.webp');
    loadImage('img/home-hero-sq-038.webp');
    loadImage('img/home-hero-sq-039.webp');
    loadImage('img/home-hero-sq-040.webp');
    loadImage('img/home-hero-sq-041.webp');
    loadImage('img/home-hero-sq-042.webp');
    loadImage('img/home-hero-sq-043.webp');
    loadImage('img/home-hero-sq-044.webp');
    loadImage('img/home-hero-sq-045.webp');
    loadImage('img/home-hero-sq-046.webp');
    loadImage('img/home-hero-sq-047.webp');
    // 원하는 만큼 이미지를 추가하세요.

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    function drawImages() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        const currentImage = images[currentImageIndex];
        const nextImageIndex = (currentImageIndex + 1) % images.length;
        const nextImage = images[nextImageIndex];

        ctx.globalAlpha = 1; // 이미지를 서서히 나타나게 하기 위해 투명도를 초기화합니다.

        ctx.drawImage(currentImage, 0, 0, canvas.width, canvas.height);

        ctx.globalAlpha = 1 - (imageFadeDuration / 1000); // 투명도를 조절하여 서서히 이미지가 사라지도록 합니다.
        ctx.drawImage(nextImage, 0, 0, canvas.width, canvas.height);

        ctx.globalAlpha = 1; // 투명도를 원래대로 복원합니다.

        // 이미지를 변경하고 다음 프레임을 렌더링합니다.
        currentImageIndex = nextImageIndex;
        setTimeout(drawImages, imageFadeDuration);
    }

    // 이미지 모션 시작
    drawImages();
});