
const form = document.querySelector('.top-banner form');
const input = document.querySelector(".top-banner input");
const list = document.querySelector(".ajax-section .cities");



const apiKey = "1zk7DGudojrrmG446JPYcr1LPfsWxxoG";

form.addEventListener("submit", e => {
    e.preventDefault();

    let inputVal = input.value;
    const url = `https://api.nytimes.com/svc/movies/v2/reviews/search.json?query=${inputVal}&api-key=${apiKey}`;
    let extrArea = document.getElementById("ajaSec");
    extrArea.innerHTML = `
        <div class="container2">
            <div id="goBack"><a href="#flbd" id="btnGoBack">^</a></div>
            <ul class="films" id="plcInsrt">
            
            </ul>
        </div>`;
    
    let growArea = document.getElementById("plcInsrt");
    growArea.innerHTML = '';
    fetch(url)
    .then(response => response.json())
    .then(data => {
        const {results} = data;
        for (let i = 0; i < results.length; i++) {
            let filmTitle = results[i].display_title;
            if (filmTitle == '') continue;
            let rating = results[i].mpaa_rating;
            if (rating == '') rating = 'IDK';
            let summary = results[i].summary_short
            let adv = results[i].headline;
            let url = results[i].link.url;
            let critic = results[i].byline;
            console.log(data);
            growArea.innerHTML += `
                    <li id="li1">
                        <h1><a href="http://www.google.com/search?q=${filmTitle}" target="_blank">${filmTitle}</a></h1> 
                        <span>${rating}</span>
                        <p class="aboutFilm">${summary}</p>
                        <p class="critic">Review by ${critic}</p>
                        <a class="criticTitle" href="${url}" target="_blank"}>${adv}</a>
                    </li>`;
        }
        growArea.scrollIntoView();
        
    })
    .catch(() => {
        growArea.innerHTML = `
                <li id="li1">
                    <p class="critic">Oops... we can't find the film that you are looking for, try one more time, please:)</p>
                </li>`;
        growArea.scrollIntoView();
    });
});

