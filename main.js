function playsound(audioName){
    let audio = new Audio(audioName)
    audio.loop = true;
    audio.play();
}
playsound("Bijlee Bijlee - Harrdy Sandhu(1).wav");