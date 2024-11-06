//===変数群==========
//ボタンの交換時の変数
let button = false;

//押されたボタン認識と入力用の変数
let push = "";
let outPut = "";
let texCou = "";

// ページの切り替え
let page = true;


//===イベントフロー群==========
//キーパッド入力時の挙動の数値入力
$('.numKey').click(function(){
    texCou = outPut.length;
    push = $(this).data('num');
    if(push == "*") {
        outPut = "";
        button = false;
        butSwitch();
    } else if(texCou < 10) {
        outPut = outPut + push;
    }
    $("#numBox").text(outPut);
});

//再生・停止のクリックイベント
$('.switch').click(function(){
    butSwitch();
});

// ページ変更の処理
if(page === true) {
    document.getElementsByTagName("body")[0].style.backgroundColor = '#e0e0e0';
} else {
    document.getElementsByTagName("body")[0].style.backgroundColor = '#383838';
}

//===ここから下は処理変数群==========
const butSwitch = () => {
    if(button === true) {
        $(".switch").removeClass("play");
        $(".switch").addClass("playing");
        $("#header").removeClass("hide");
        $("#header").addClass("appear");
        button = false;
    } else {
        $(".switch").removeClass("playing");
        $(".switch").addClass("play");
        $("#header").addClass("hide");
        $("#header").removeClass("appear");
        button = true;
    }
}