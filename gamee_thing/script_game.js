'use strict';

const current_sc1=document.getElementById('current-1');
const current_sc2=document.getElementById('current-2');
let score1_element=document.querySelector('#score-1');
score1_element.textContent=0;
let score2_element=document.querySelector('#score-2');
score2_element.textContent=0;
const oggy_im=document.querySelector('.oggy');
const new_game_butn=document.querySelector('.butn-new');   //NEW GAME
const roll_butn=document.querySelector('.butn-rolling');  // ROLLING
const freeze_score=document.querySelector('.butn-freeze');  //HOLD up breh!



oggy_im.classList.add('hiddg');
roll_butn.addEventListener('click',rollin_dice);

const scores=[0,0,0];
let current_score=0;
let active_player=1;
function reset_game(){
  current_score=0;
  current_sc1.textContent=current_score;
  current_sc2.textContent=current_score;
  score1_element.textContent=current_score;
  score2_element.textContent=current_score;
  oggy_im.classList.add('hiddg');
}
function freezin(){
  score1_element.textContent="saved score:"+current_score;
  active_player= active_player===1 ? 2 : 1;
}
freeze_score.addEventListener('click',freezin);
function rollin_dice(){
  const roll=Math.trunc(Math.random()*6)+1;
  console.log(roll);
  oggy_im.src=`oggy-${roll}.png`;
  oggy_im.style="height:200px; width:200px;"
  oggy_im.classList.remove('hiddg');
  if(roll!==1){
    current_score+=roll;
    // current_sc1.textContent=current_score;
    scores[1]=current_score;
    document.getElementById('current-'+active_player).textContent=current_score;
  }else{
    active_player = active_player === 1 ? 2 : 1; 
  }
}

new_game_butn.addEventListener('click',reset_game);
// ---------------------------------------------------------------------------