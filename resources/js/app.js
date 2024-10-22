import './bootstrap';

import Alpine from 'alpinejs';

import { 
    Tooltip,
    Dropdown,
    Carousel,
    initTWE,
} from 'tw-elements'; //import TW elements

window.Alpine = Alpine;

Alpine.start();

//init here the imported TW elements
initTWE({ Dropdown, Carousel });

let post_title = document.getElementById("post_title");
if(post_title){
  post_title.onchange = function() {filterSlugByPostTitleChange()}; //filter slug on title field change event
}

let post_slug = document.getElementById("post_slug");
if(post_slug){
  post_slug.onchange = function() {filterSlugByPostSlugChange()}; //filter slug on slug field change event
}
    
function filterSlugByPostTitleChange() {
  let x = document.getElementById("post_title");
  let postSLug = document.getElementById("post_slug").value;
  let removeCharacters = x.value.replaceAll(/[.,'"=<>%!&:;*+?^${}()|[\]\\]/g, "").toLowerCase(); //remove all characters in the string
  let toSlugVal= removeCharacters.replaceAll(/\s+/g, ' ').replaceAll(' ', '-').toLowerCase(); //first replaceAll is to remove double space, second is to replace all space with "-"
  
  if(!postSLug){
    document.getElementById("post_slug").value = toSlugVal;
  }
}

function filterSlugByPostSlugChange() {
  let x = document.getElementById("post_slug");
  let postSLug = document.getElementById("post_slug").value;
  let removeCharacters = x.value.replaceAll(/[.,'"=<>%!&:;*+?^${}()|[\]\\]/g, "").toLowerCase(); //remove all characters in the string
  let toSlugVal= removeCharacters.replaceAll(/\s+/g, ' ').replaceAll(' ', '-').toLowerCase(); //first replaceAll is to remove double space, second is to replace all space with "-"
  
  document.getElementById("post_slug").value = toSlugVal;
}

//Stand Alone JavaScript integration function of laravel file manager by unisharp
var lfm = function(id, type, options) {
  let button = document.getElementById(id);
  type = type || 'file'

  if (button) {
      button.addEventListener('click', function () {
          var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
          var target_input = document.getElementById(button.getAttribute('data-input'));
          var target_preview = document.getElementById(button.getAttribute('data-preview'));
          var target_name = document.getElementById(button.getAttribute('data-name')); // custom code

          window.open(route_prefix + '?type=' + type || 'file', 'FileManager', 'width=900,height=600');
          window.SetUrl = function (items) {
          var file_path = items.map(function (item) {
              return item.url;
          }).join(',');

          // set the value of the desired input to image url
          target_input.value = file_path;
          target_input.dispatchEvent(new Event('change'));

          // clear previous preview
          target_preview.innerHtml = '';

          // custom code
          var file_name = items.map(function (item) {
            return item.name;
          }).join(',');
          target_name.value = file_name;
          target_name.dispatchEvent(new Event('change'));

          if(file_path){
            document.getElementById('preview_fromDb').src = "";
          }
         

          // set or change the preview image src
          items.forEach(function (item) {
              console.log(item)
              let img = document.createElement('img')
              img.setAttribute('style', 'width: 100%')
              img.setAttribute('src', item.url)
              target_preview.appendChild(img);
          });

          // trigger change event
          target_preview.dispatchEvent(new Event('change'));
          };
      });
  }
}
//End Here

//To use the lfm function above
lfm('lfm1', 'image');
//End Here

//Remove the <p> tag with &nbsp; on blog short description. Homepage and blog list
let blogDescription = document.getElementById('blog-description');

if(blogDescription){
  const p = blogDescription.getElementsByTagName('p')
  for (let index = 0; index < p.length; index++) {
    p[index].innerHTML = p[index].innerHTML.replace(/\&nbsp;/g, '');
  }
}
//End Here


