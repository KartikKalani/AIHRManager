<!DOCTYPE html>
<html>

<head>
    <style>
        div {
            justify-content: center;
            align-items: center;
            border: "10";
            width: 200px;
            height: 300px;
            border: 1px solid blue;
        }

        body {
            background-image: url('background.jpg');

            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        form {
            font-size: 30px;
        }

        .error {
            color: red;
        }

        input[type=submit] {
            background-color: darksalmon;
            border: none;
            color: white;
            padding: 12px 32px;
            text-decoration: none;
            margin: 20px 2px;
            cursor: pointer;
            border-radius: 10%;
            font-size: 25px;
        }

        input[type=text],
        input[type=password] {
            font-size: 25px;
            height: 35px;
            width: 300px;
            margin: 5px;
        }
    </style>
    <title>Interview</title>

    <link rel="icon" href="logo.jpeg" type="image/x-icon">

</head>

<body>

    <?php

    $servername = "localhost";
    $username = "root";
    $password = "enter  passaword here ";
    $dbname = "enter database name here";

    // Create connection
    $conn = new mysqli(
        $servername,
        $username,
        $password,
        $dbname
    );
    // Check connection
    $video = 1;
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {

        $sql = "select *from video_id";
        $result = $conn->query($sql);

        $row = $result->num_rows;
        if ($row == 1) {
            echo "hello how are you";
            $row1 = $result->fetch_assoc();
            $video = (int)$row1['id'];

            $new = $video + 1;
            $sql = " UPDATE video_id SET id =$new WHERE id =$video";
            $result = $conn->query($sql);
        }
    }

    ?>

    <script>
        function videoEnded() {
            var langs = [
                ['Afrikaans', ['af-ZA']],
                ['አማርኛ', ['am-ET']],
                ['Azərbaycanca', ['az-AZ']],
                ['বাংলা', ['bn-BD', 'বাংলাদেশ'],
                    ['bn-IN', 'ভারত']
                ],
                ['Bahasa Indonesia', ['id-ID']],
                ['Bahasa Melayu', ['ms-MY']],
                ['Català', ['ca-ES']],
                ['Čeština', ['cs-CZ']],
                ['Dansk', ['da-DK']],
                ['Deutsch', ['de-DE']],
                ['English', ['en-AU', 'Australia'],
                    ['en-CA', 'Canada'],
                    ['en-IN', 'India'],
                    ['en-KE', 'Kenya'],
                    ['en-TZ', 'Tanzania'],
                    ['en-GH', 'Ghana'],
                    ['en-NZ', 'New Zealand'],
                    ['en-NG', 'Nigeria'],
                    ['en-ZA', 'South Africa'],
                    ['en-PH', 'Philippines'],
                    ['en-GB', 'United Kingdom'],
                    ['en-US', 'United States']
                ],
                ['Español', ['es-AR', 'Argentina'],
                    ['es-BO', 'Bolivia'],
                    ['es-CL', 'Chile'],
                    ['es-CO', 'Colombia'],
                    ['es-CR', 'Costa Rica'],
                    ['es-EC', 'Ecuador'],
                    ['es-SV', 'El Salvador'],
                    ['es-ES', 'España'],
                    ['es-US', 'Estados Unidos'],
                    ['es-GT', 'Guatemala'],
                    ['es-HN', 'Honduras'],
                    ['es-MX', 'México'],
                    ['es-NI', 'Nicaragua'],
                    ['es-PA', 'Panamá'],
                    ['es-PY', 'Paraguay'],
                    ['es-PE', 'Perú'],
                    ['es-PR', 'Puerto Rico'],
                    ['es-DO', 'República Dominicana'],
                    ['es-UY', 'Uruguay'],
                    ['es-VE', 'Venezuela']
                ],
                ['Euskara', ['eu-ES']],
                ['Filipino', ['fil-PH']],
                ['Français', ['fr-FR']],
                ['Basa Jawa', ['jv-ID']],
                ['Galego', ['gl-ES']],
                ['ગુજરાતી', ['gu-IN']],
                ['Hrvatski', ['hr-HR']],
                ['IsiZulu', ['zu-ZA']],
                ['Íslenska', ['is-IS']],
                ['Italiano', ['it-IT', 'Italia'],
                    ['it-CH', 'Svizzera']
                ],
                ['ಕನ್ನಡ', ['kn-IN']],
                ['ភាសាខ្មែរ', ['km-KH']],
                ['Latviešu', ['lv-LV']],
                ['Lietuvių', ['lt-LT']],
                ['മലയാളം', ['ml-IN']],
                ['मराठी', ['mr-IN']],
                ['Magyar', ['hu-HU']],
                ['ລາວ', ['lo-LA']],
                ['Nederlands', ['nl-NL']],
                ['नेपाली भाषा', ['ne-NP']],
                ['Norsk bokmål', ['nb-NO']],
                ['Polski', ['pl-PL']],
                ['Português', ['pt-BR', 'Brasil'],
                    ['pt-PT', 'Portugal']
                ],
                ['Română', ['ro-RO']],
                ['සිංහල', ['si-LK']],
                ['Slovenščina', ['sl-SI']],
                ['Basa Sunda', ['su-ID']],
                ['Slovenčina', ['sk-SK']],
                ['Suomi', ['fi-FI']],
                ['Svenska', ['sv-SE']],
                ['Kiswahili', ['sw-TZ', 'Tanzania'],
                    ['sw-KE', 'Kenya']
                ],
                ['ქართული', ['ka-GE']],
                ['Հայերեն', ['hy-AM']],
                ['தமிழ்', ['ta-IN', 'இந்தியா'],
                    ['ta-SG', 'சிங்கப்பூர்'],
                    ['ta-LK', 'இலங்கை'],
                    ['ta-MY', 'மலேசியா']
                ],
                ['తెలుగు', ['te-IN']],
                ['Tiếng Việt', ['vi-VN']],
                ['Türkçe', ['tr-TR']],
                ['اُردُو', ['ur-PK', 'پاکستان'],
                    ['ur-IN', 'بھارت']
                ],
                ['Ελληνικά', ['el-GR']],
                ['български', ['bg-BG']],
                ['Pусский', ['ru-RU']],
                ['Српски', ['sr-RS']],
                ['Українська', ['uk-UA']],
                ['한국어', ['ko-KR']],
                ['中文', ['cmn-Hans-CN', '普通话 (中国大陆)'],
                    ['cmn-Hans-HK', '普通话 (香港)'],
                    ['cmn-Hant-TW', '中文 (台灣)'],
                    ['yue-Hant-HK', '粵語 (香港)']
                ],
                ['日本語', ['ja-JP']],
                ['हिन्दी', ['hi-IN']],
                ['ภาษาไทย', ['th-TH']]
            ];


            select_language.options[0] = new Option(langs[i][0], i);


            select_language.selectedIndex = 10;
            updateCountry();
            select_dialect.selectedIndex = 11;

            function updateCountry() {
                for (var i = select_dialect.options.length - 1; i >= 0; i--) {
                    select_dialect.remove(i);
                }

                var list = langs[select_language.selectedIndex];
                for (var i = 1; i < list.length; i++) {
                    select_dialect.options.add(new Option(list[i][1], list[i][0]));
                }
                select_dialect.style.visibility = list[1].length == 1 ? 'hidden' : 'visible';
            }

            function runSpeechRecognition(box) {

                var output = document.getElementById("output");

                var action = document.getElementById("action");

                var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
                var recognition = new SpeechRecognition();
                recognition.lang = select_dialect.value;
                recognition.interimResults = true;

                recognition.onstart = function() {
                    action.innerHTML = "<small>listening, please speak...</small>";
                };

                recognition.onspeechend = function() {
                    action.innerHTML = "<small>stopped listening, hope you are done! Click again to start.</small>";
                    recognition.stop();
                }

                recognition.onresult = function(event) {
                    var transcript = event.results[0][0].transcript;
                    var confidence = event.results[0][0].confidence;
                    output.innerHTML = "<b>Text:</b> " + transcript.capitalize() + "<br> <b>Confidence:</b> " + confidence * 100 + "%";
                    output.classList.remove("hide");
                };

                recognition.start();
            }

            String.prototype.capitalize = function() {
                return this.charAt(0).toUpperCase() + this.slice(1);
            }

            var button = document.getElementById('speak');
            var voiceSelect = document.getElementById('voice');

            function loadVoices() {
                var voices = speechSynthesis.getVoices();

                voices.forEach(function(voice, i) {
                    var option = document.createElement('option');

                    option.value = voice.voiceURI;
                    option.dataset.lang = voice.lang;
                    option.innerHTML = voice.name;

                    voiceSelect.appendChild(option);
                });
            }

            loadVoices();

            window.speechSynthesis.onvoiceschanged = function(e) {
                loadVoices();
            };

            function textToAudio() {
                const msg = document.getElementById("text-to-speech").value;
                let speech = new SpeechSynthesisUtterance();

                if (voiceSelect.value) {
                    var selectedVoice = speechSynthesis.getVoices().filter(function(voice) {
                        return voice.voiceURI == voiceSelect.value;
                    })[0];
                    speech.voiceURI = selectedVoice.voiceURI;
                    speech.lang = selectedVoice.lang;
                    speech.voice = selectedVoice;
                    speech.text = msg;
                }

                window.speechSynthesis.speak(speech);
            }

            speak.addEventListener("click", function() {
                textToAudio();
            });

            let cancel = document.getElementById("stop");
            cancel.addEventListener("click", function() {
                window.speechSynthesis.cancel();
            });

        }

        function reload() {
            // Video playback has ended, redirect to another page

            window.location.href = 'start.php'; // Replace 'new_page.php' with the page you want to redirect to

        }
    </script>

    <table align="center">
        <tr align="center">
            <td>

                <video width="40%" autoplay playsinline onended="reload()">
                    <source src="<?php echo "videos/$video.MP4"; ?>" type="video/mp4">
                </video>

                <span id="action"></span></p>
                <div id="output" class="hide"></div>

            </td>
        </tr>
    </table>

</body>

</html>
