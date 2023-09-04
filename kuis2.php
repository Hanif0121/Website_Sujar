<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Luar  Angkasa</title>
    <link rel="stylesheet" href="Kuis.css">
</head>
<body>
    <div class="start_btn">
        <button>Start Quiz</button>
    </div>
    <div class="info_box">
        <div class="info_title">
            <span>Rules</span>
        </div>
        <div class="info_list">
            <div class="info">1. Anda hanya punya <span> 75 detik </span> untuk mengerjakana kuis</div>
            <div class="info">2. Jika anda sudah memilih jawaban maka jawaban tiba bisa di ganti </div>
            <div class="info">3. Anda tidak bisa kembali ke soal sebelumnya</div>
            <div class="info">4. Anda tidak bisa keluar kuis jika anda sudah memainkannya</div>
            <div class="info">5. Anda akan mendapatkan score jika jawaban anda benar</div>
        </div>
        <div class="buttons">
            <button class="quit"><a href="lobby.php">Exit Quiz</a></button>
            <button class="restart">Continue</button>
        </div>
    </div>

    <div class="quiz_box">
        <header>
            <div class="title">Aplikasi Kuis Luar Biasa</div>
            <div class="timer">
            <div class="time_text">Time Left</div>
            <div class="timer_sec">75</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
               <!-- <span>What Does HTML stand font </span><-->
            </div>
            <div class="option_list">
                <!-- <span>What Does HTML stand font </span>
                <div class="option">
                    <span>a</span>
                    <div class="icon tick"><i class="fas fa-check"></i></div>
                </div>
                <div class="option">
                    <span>b</span>
                    <div class="icon cross"><i class="fas fa-times"></i></div>
                </div>
                <div class="option">
                    <span>c</span>
                </div>
                <div class="option">
                    <span>d</span>
                </div>
                <div class="option">
                    <span>e</span>
                </div> -->
                
            </div>
        </section>
        <footer>
            <div class="total_que">
                <!-- <span><p>2</p>of<p>5</p>Question</span> -->
            </div>
            <button class="next_btn">Next Question</button>
        </footer>
    </div>
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">Kamu telah selesai kuis</div>
        <div class="score_text">
           <!-- <span>and sorry, You got only <p>2</p>out of<p>5</p></span> -->
        </div>
        <div class="buttons">
            <button class="restart">Replay Quiz</button>
            <button class="quit"><a href="lobby.php">Quit Quiz</a></button>
        </div>
    </div>
    <script src="KUIS10.js"></script>
    <script src="kuis2.js"></script>
    
</body>
</html>