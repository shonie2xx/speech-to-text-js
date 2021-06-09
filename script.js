var SpeechRecognition = window.webkitSpeechRecognition;
  
var recognition = new SpeechRecognition();

var tbTranscript = $('#tbTranscript');
var tbNote = $('#tbNote');

var content = '';

recognition.continuous = false;

recognition.interimResults = true;

let btnStart = document.getElementById("start-btn");
let btnStop = document.getElementById("stop-btn");



recognition.onresult = function(event) {

    const transcript = Array.from(event.results)
    .map(result => result[0])
    .map(result => result.transcript)
    .join('')

    console.log(transcript);
    
    tbTranscript.val(transcript);
    
    if(event.results[0].isFinal){
    content += transcript + '\n';
    tbNote.val(content);
    }

    console.log(content);
};

btnStart.onclick = function(){
        recognition.start();
        console.log("ready");
    }


recognition.addEventListener('end',recognition.start);

btnStop.onclick = function(){
    recognition.abort();
}



