// collecting data in the main content
let titleArea = document.getElementsByClassName('title');
let textArea = document.getElementsByClassName('text');

// collecting data in the courses area
let titleAreaCourse = document.getElementsByClassName('titleCourse');
let textAreaCourse = document.getElementsByClassName('textCourse');
let imgAreaCourse = document.getElementsByClassName('imagepathCourse');

// collecting data in the blogs area
let titleAreaBlog = document.getElementsByClassName('titleBlog');
let textAreaBlog = document.getElementsByClassName('textBlog');
let imgAreaBlog = document.getElementsByClassName('imagepathBlog');

// identifier: 0 - content, 1 - course, 2 - blog 
function editTextArea(identifier, index) {
    switch (identifier) {
        
        case 0: {
            changeContentArea("white", false, index);

            document.getElementsByClassName('submit')[index].style.display = 'inline-block';
            document.getElementsByClassName('cancel')[index].style.display = 'inline-block';
            break;
        }
        case 1: {
            changeCourseArea("white", false, index);
            
            document.getElementsByClassName('submitCourse')[index].style.display = 'inline-block';
            document.getElementsByClassName('cancelCourse')[index].style.display = 'inline-block';
            break;
        }
        case 2: {
            changeBlogArea("white", false, index);

            document.getElementsByClassName('submitBlog')[index].style.display = 'inline-block';
            document.getElementsByClassName('cancelBlog')[index].style.display = 'inline-block';
            break;
        }
        default: {
            console.log("you are on the wrong way");
            break;
        }
    }


    
}

function cancelInput(identifier, index) {
    switch (identifier) {
        
        case 0: {
            changeContentArea("lightgrey", true, index);

            document.getElementsByClassName('submit')[index].style.display = 'none';
            document.getElementsByClassName('cancel')[index].style.display = 'none';
            break;
        }
        case 1: {
            changeCourseArea("lightgrey", true, index);

            document.getElementsByClassName('submitCourse')[index].style.display = 'none';
            document.getElementsByClassName('cancelCourse')[index].style.display = 'none';
            break;
        }
        case 2: {
            changeBlogArea("lightgrey", true, index);

            document.getElementsByClassName('submitBlog')[index].style.display = 'none';
            document.getElementsByClassName('cancelBlog')[index].style.display = 'none';
            break;
        }
        default: {
            console.log("you are on the wrong way");
            break;
        }
    }
    
}

// Changing css parametrs for content, corses, blogs area
function changeContentArea(colour, isReadO, index) {
    titleArea[index].readOnly = isReadO;
    textArea[index].readOnly = isReadO;    
    
    titleArea[index].style.backgroundColor = colour;
    textArea[index].style.backgroundColor = colour;
}

function changeCourseArea(colour, isReadO, index) {
    titleAreaCourse[index].readOnly = isReadO;
    textAreaCourse[index].readOnly = isReadO; 
    imgAreaCourse[index].readOnly = isReadO;
    
    titleAreaCourse[index].style.backgroundColor = colour;        
    textAreaCourse[index].style.backgroundColor = colour;
    imgAreaCourse[index].style.backgroundColor = colour;
}

function changeBlogArea(colour, isReadO, index) {
    titleAreaBlog[index].readOnly = isReadO;
    textAreaBlog[index].readOnly = isReadO; 
    imgAreaBlog[index].readOnly = isReadO;
    
    titleAreaBlog[index].style.backgroundColor = colour;        
    textAreaBlog[index].style.backgroundColor = colour;
    imgAreaBlog[index].style.backgroundColor = colour;
}

// blog area, creating new div for a new blog record

let placeForBlog = document.getElementById('placeForBlog');
function newPlaceForBlog() {
    
    placeForBlog.innerHTML = 
    `<form action="" class="form" method="post">
        <label for="title"></label>

        <input class="titleBlog" type="text" id="titleNew" placeholder="Place for the title" name="titleNewBlog" value="">

        <label for="textNew">Text</label>
        <textarea id="textNew" name="textNewBlog" class="textBlog" rows="5" placeholder="Place for your text"></textarea>
        <div class="btnArea">
            <input id="submitBlog" type="submit" value="Submit" class="submitNewBlog" name="submitNewBlog" onclick="validateBefore()">
            <input id="cancelBlog" type="button" value="Cancel" class="cancelNewBlog" onclick="removeNewPlaceBlog()">                    
        </div>
        <label for="imagepathNew">Name of the image</label>
        <input class="imagepathBlog" type="text" id="imagepathNew" name="imagepath">
    </form>
    `;

    document.getElementById('createPost').disabled = true;
}

function removeNewPlaceBlog() {
    placeForBlog.innerHTML = "";
    document.getElementById('createPost').disabled = false;
}

