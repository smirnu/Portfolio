let count = 0;
let corrAnsw = 0;
const maxPoint = 10;
let somearr = ['0','3','0','1','0','234','0','3','0','1','0','124','0','2','0','1','0','2','0','1','0'];

let continueBtn = document.getElementById('submit');
let log = document.getElementById('count');
let firstQuestionHtml = document.getElementById('question');

continueBtn.addEventListener('click', function checkingCount(e) {
    
    switch(count) {
        case 0: {
            continueBtn.innerHTML = 'Submit';
            firstQuestion();
            break;
        }
        case 1: {
            continueBtn.innerHTML = 'Next'; 
            document.getElementById('divForImg').innerHTML = `<img src="img/cats-g764658a46_640.jpg" id="quizImg"></img>`;
            firstQuestionHtml.innerHTML = `Isaac Newton is famous for the gravity theory, but it’s also believed that he invented the <b>cat door</b>. How Stuff Works writes that when Newton was working on his experiments at the University of Cambridge he was constantly interrupted by his cats scratching at the door. So he called the Cambridge carpenter to saw two holes in the door, one for the mother cat and one for her kittens! Apparently these holes can still be seen at the university today.</p>`;
            break;
        }
        case 2: {
                continueBtn.innerHTML = 'Submit';
                secondQuestion();
                break;
        }
        case 3: {
            continueBtn.innerHTML = 'Next'; 
            document.getElementById('divForImg').innerHTML = `<img src="img/aircraft-gcb7897462_640.jpg" id="quizImg"></img>`;
            firstQuestionHtml.innerHTML = `Flying in an aeroplane is statistically safer than driving in a car, true or false? <br>
            Although there have been a number of headline-grabbing aviation disasters in recent years, the statistics are clear: flying is safer than it has ever been. However, that does not mean air travel is completely without risk.`;
            break;
        }
        case 4: {
            continueBtn.innerHTML = 'Submit';
            thirdQuestion();            
            break;
        }
        case 5: {
            continueBtn.innerHTML = 'Next'; 
            document.getElementById('divForImg').innerHTML = `<img src="img/pasta-g53f1bba9c_640.jpg" id="quizImg"></img>`;
            firstQuestionHtml.innerHTML = `Pappardelle - are large, very broad, flat pasta, similar to wide fettuccine, originating from the region of Tuscany.<br>Ditalini - is a type of pasta that is shaped like small tubes. It has been described as "thimble-sized" and as "very short macaroni"<br>Rigatoni - are a form of tube-shaped pasta of varying lengths and diameters originating in Italy.<br>Finally, Cannuccia - a drinking straw`;
            break;
        }
        case 6: {
            continueBtn.innerHTML = 'Submit';
            fourthQuestion();
            break;
        }
        case 7: {
            continueBtn.innerHTML = 'Next'; 
            document.getElementById('divForImg').innerHTML = `<img src="img/dolphin-gb69e5e222_640.jpg" id="quizImg"></img>`;
            firstQuestionHtml.innerHTML = `Which animal from this list is genetically closest to a cow?<br>The closest living relatives of dolphins today are the even toed ungulates such as camels and cows with the humble hippopotamus being the closest living relative. The origin of dolphins and the origin of whales in general is the subject of much debate.`;
            break;
        }
        case 8: {
            continueBtn.innerHTML = 'Submit';
            fifthQuestion();
            break;
        }
        case 9: {
            continueBtn.innerHTML = 'Next'; 
            document.getElementById('divForImg').innerHTML = `<img src="img/cubes-ga4c49e377_640.png" id="quizImg"></img>`;
            firstQuestionHtml.innerHTML = `Wombat poo is cube-shaped, True or False?<br>It is true. The researchers say the distinctive cube shape of wombat poop is caused as a result of the drying of the faeces in the colon, and muscular contractions, which form the uniform size and corners of the poop.`;
            break;
        }
        case 10: {
            continueBtn.innerHTML = 'Submit';
            sixthQuestion();
            break;
        }
        case 11: {
            continueBtn.innerHTML = 'Next'; 
            document.getElementById('divForImg').innerHTML = `<img src="img/wives.png" id="quizImg"></img>`;
            firstQuestionHtml.innerHTML = `Divorced, beheaded, died, divorced, beheaded, survived. It’s a mnemonic device many of us learned as children to remember the fates of the six women – Catherine of Aragon, Anne Boleyn, Jane Seymour, Anne of Cleves, Catherine Howard and Katherine Parr – who became Henry VIII’s queens between 1509 and 1547.`;
            break;
        }
        default: {
            theEnd();
        }
    }

    if (count >= 0 ){
        let options = document.getElementsByName('fav_language');
        let options_id = [];
        let ind = 0;
        for(let i = 0; i < options.length; i++){
            if(options[i].checked){
                options_id[ind] = options[i].id;
                ind++;
            }
        }
        correctAnswer(options_id);
        log.innerHTML = corrAnsw + '/' + maxPoint;

    }
    count++;   
});

function correctAnswer(userAns) {
    if (count % 2 != 0) {
        let corAnsArr = somearr[count].split("");
        userAns.forEach(element => {
            if (corAnsArr.indexOf(element) >= 0) {
                corrAnsw++;
                document.getElementById('lbl' + element).style.backgroundColor = 'green';        
            } else {
                document.getElementById('lbl' + element).style.backgroundColor = 'red';
            }
        });
            
    
        corAnsArr.forEach(element => {
            if (userAns.indexOf(element) < 0) document.getElementById('lbl' + element).style.backgroundColor = 'green';
        });
    }
    
}

function firstQuestion() {
    firstQuestionHtml.innerHTML = 'Isaac Newton is famous for the gravity theory, but it’s also believed that he invented ____';
    document.getElementById('divForImg').innerHTML = `<img src="img/isaac-newton-g9881175db_640.png" id="quizImg"></img>`;
    document.getElementById('thereIsAnswers').innerHTML = `
        <div class="fourOptions">
            <input class="radioBtn" type="radio" id="1" name="fav_language" value="HTML">
            <label for="1" id="lbl1">Loofah</label>
        </div>
        <div class="fourOptions">
            <input class="radioBtn" type="radio" id="2" name="fav_language" value="CSS">
            <label for="2" id="lbl2">Purse</label>
        </div>
        <div class="fourOptions">
            <input class="radioBtn" type="radio" id="3" name="fav_language" value="JavaScript">
            <label for="3" id="lbl3">Cat door</label>
        </div>
        <div class="fourOptions">
            <input class="radioBtn" type="radio" id="4" name="fav_language" value="python">
            <label for="4" id="lbl4">Bucatini</label>
        </div>`;
}

function secondQuestion() {
    firstQuestionHtml.innerHTML = 'Flying in an aeroplane is statistically safer than driving in a car, true or false';
    document.getElementById('divForImg').innerHTML = `<img src="img/shelby-cobra-g898802bee_640.jpg" id="quizImg"></img>`;
    document.getElementById('thereIsAnswers').innerHTML = `
        <div class="fourOptions">
            <input class="radioBtn" type="radio" id="1" name="fav_language" value="True">
            <label for="1" id="lbl1">True</label>
        </div>
        <div class="fourOptions">
            <input class="radioBtn" type="radio" id="2" name="fav_language" value="false">
            <label for="2" id="lbl2">False</label>
        </div>`;
}
function thirdQuestion() {
    firstQuestionHtml.innerHTML = 'Find all types of pasta';
    document.getElementById('divForImg').innerHTML = `<img src="img/pasta-gd3b7ac116_640.jpg" id="quizImg"></img>`;
    document.getElementById('thereIsAnswers').innerHTML = `
        <div class="fourOptions">
            <input class="radioBtn" type="checkbox" id="1" name="fav_language" value="HTML">
            <label for="1" id="lbl1">Cannuccia</label>
        </div>
        <div class="fourOptions">
            <input class="radioBtn" type="checkbox" id="2" name="fav_language" value="CSS">
            <label for="2" id="lbl2">Pappardelle</label>
        </div>
        <div class="fourOptions">
            <input class="radioBtn" type="checkbox" id="3" name="fav_language" value="JavaScript">
            <label for="3" id="lbl3">Ditalini</label>
        </div>
        <div class="fourOptions">
            <input class="radioBtn" type="checkbox" id="4" name="fav_language" value="python">
            <label for="4" id="lbl4">Rigatoni</label>
        </div>`;
}

function fourthQuestion() {
    firstQuestionHtml.innerHTML = 'Which animal from this list is genetically closest to a cow?';
    document.getElementById('divForImg').innerHTML = `<img src="img/cow-g1c6f1716c_640.jpg" id="quizImg"></img>`;
    document.getElementById('thereIsAnswers').innerHTML = `
        <div class="fourOptions">
            <input class="radioBtn" type="radio" id="1" name="fav_language" value="HTML">
            <label for="1" id="lbl1">Horse</label>
        </div>
        <div class="fourOptions">
            <input class="radioBtn" type="radio" id="2" name="fav_language" value="CSS">
            <label for="2" id="lbl2">Rhinoceros</label>
        </div>
        <div class="fourOptions">
            <input class="radioBtn" type="radio" id="3" name="fav_language" value="JavaScript">
            <label for="3" id="lbl3">Dolphin</label>
        </div>
        <div class="fourOptions">
            <input class="radioBtn" type="radio" id="4" name="fav_language" value="python">
            <label for="4" id="lbl4">Dog</label>
        </div>`;
}

function fifthQuestion() {
    firstQuestionHtml.innerHTML = 'Wombat poo is cube-shaped, True or False';
    document.getElementById('divForImg').innerHTML = `<img src="img/common-wombat-gffde7eee8_640.jpg" id="quizImg"></img>`;
    document.getElementById('thereIsAnswers').innerHTML = `
        <div class="fourOptions">
            <input class="radioBtn" type="radio" id="1" name="fav_language" value="True">
            <label for="1" id="lbl1">True</label>
        </div>
        <div class="fourOptions">
            <input class="radioBtn" type="radio" id="2" name="fav_language" value="false">
            <label for="2" id="lbl2">False</label>
        </div>`;
}
function sixthQuestion() {
    firstQuestionHtml.innerHTML = 'Henry VIII"s six wives had names:';
    document.getElementById('divForImg').innerHTML = `<img src="img/hans-holbeing-gc0b3d1e7f_640.jpg" id="quizImg"></img>`;
    document.getElementById('thereIsAnswers').innerHTML = `
        <div class="fourOptions">
            <input class="radioBtn" type="checkbox" id="1" name="fav_language" value="HTML">
            <label for="1" id="lbl1">Catherine</label>
        </div>
        <div class="fourOptions">
            <input class="radioBtn" type="checkbox" id="2" name="fav_language" value="CSS">
            <label for="2" id="lbl2">Jane</label>
        </div>
        <div class="fourOptions">
            <input class="radioBtn" type="checkbox" id="3" name="fav_language" value="JavaScript">
            <label for="3" id="lbl3">Mary</label>
        </div>
        <div class="fourOptions">
            <input class="radioBtn" type="checkbox" id="4" name="fav_language" value="python">
            <label for="4" id="lbl4">Anna</label>
        </div>`;
}
function theEnd() {
    firstQuestionHtml.innerHTML = 'Congratulation! You have received ' + corrAnsw + ' points out of 10!';
    
    document.getElementById('divForImg').innerHTML = '';
    document.getElementById('thereIsAnswers').innerHTML = '';
    continueBtn.innerHTML = 'Try one more time';
    count = -1;
    corrAnsw = 0;
}

