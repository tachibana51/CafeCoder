<!doctype html>
<html lang="ja">


<head>
    <?php include_once "../template/head.php"; ?>
</head>

<body>
    <?php include_once "../template/nav.php"; ?>
    <br>


    <!--メインコンテンツ-->
    <div class="container">
        <div class="card" style="width:auto">
            <div class="card-body">
                <h3 class="card-title" style="background-color:">CafeCoderへようこそ！</h3>
                <hr>
                <p class="card-text">
                    　CafeCoderは喫茶店的プログラミングコンテストサイトという位置づけで運営されています。<br>
                    　喫茶店らしくまったりとした雰囲気のコンテストを定期的に開催しているのでお気軽にご参加ください。<br>

                    <h5>CafeCoderのソースコード</h5>
                    　<a href="https://github.com/earlgray283/CafeCoder">https://github.com/earlgray283/CafeCoder</a>
                    <br>


            </div>
        </div>
    </div>
    <br />

    <div class="container">
        <div class="card" style="width:auto">
            <div class="card-body">
                <h4 class="card-title">【Tea Break 003　告知】</h4>
                <h6 class="card-subtitle mb-2 text-muted">コンテスト区分：tea</h6>
                <p class="card-text">
                    ・コンテストリンク：
                    <?php
                    echo '<a href="' . $address . '/tea003/">' . $address .
                        '/tea003/</a>';
                    ?>
                    <br> ・開催時刻：2019-11-26(火) 21:00:00
                    <br> ・コンテスト時間：90分
                    <br> ・問題数：6問
                    <br> ・Writer(敬称略)：null, 1st_vil, holeguma, 
                    <br> ・ペナルティ：<s>3分</s>なし
                    <br> ・メニュー：Green-Ceylon-Dimbula-Darjeeling-Earlgray-Keemun
                </p>

            </div>
        </div>
    </div>
    <br />

    <div class="container">
        <div class="card" style="width:auto">
            <div class="card-body">
                <h4 class="card-title">【Tea Break 002　告知】</h4>
                <h6 class="card-subtitle mb-2 text-muted">コンテスト区分：tea</h6>
                <p class="card-text">
                    ・コンテストリンク：
                    <?php
                    echo '<a href="' . $address . '/tea002/">' . $address .
                        '/tea002/</a>';
                    ?>
                    <br> ・開催時刻：2019-11-13(水) 21:00:00
                    <br> ・コンテスト時間：90分
                    <br> ・問題数：4問
                    <br> ・Writer(敬称略)：<span class="Ultraviolettwriter">Ultraviolett</span> ,otamay ,sakaki_tohru
                    <br> ・ペナルティ：3分
                    <br> ・メニュー：Green-Ceylon-Earlgray-Keemun
                </p>
                KakeCoderが帰ってきた！豪華作問メンバーと強化された採点システム、ちょっとだけ強くなったセキュリティでコンテストをお届けします。参加登録、特設ページを近日公開！<br />
            </div>
        </div>
    </div>
    <br />

    <div class="container">
        <div class="card" style="width:auto">
            <div class="card-body">
                <h4 class="card-title">【Tea Break 001　告知】</h4>
                <h6 class="card-subtitle mb-2 text-muted">コンテスト区分：tea</h6>
                <p class="card-text">
                    <?php
                    echo '<a href="' . $address . '/tea001/index.html">' . $address .
                        '/tea001/index.html</a>';
                    ?>
                    <br> ・開催時刻：2019-11-06(水) 20:00:00
                    <br> ・コンテスト時間：90分
                    <br> ・問題数：3問
                    <br> ・Writer：earlgray283
                    <br> ・ペナルティ：3分
                    <br> ・メニュー：Ceylon-Darjeeling-Earlgray
                </p>
                KakeCoderの新たな試みです。詳しくは<s>コンテストリンクへ飛んでください。</s><b>現在ページリニューアルのため過去のコンテンツが参照できません。申し訳ございませんが提出コードなどの確認は今しばらくお待ちください。</b><br>
            </div>
        </div>
    </div>
    <br />


</body>

</html>