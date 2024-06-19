import './bootstrap';

import Alpine from 'alpinejs';

import { 
    Tooltip,
    Dropdown,
    initTWE,
} from 'tw-elements'; //import TW elements

window.Alpine = Alpine;

Alpine.start();

//init here the imported TW elements
initTWE({ Dropdown });

document.getElementById("post_title").onchange = function() {myFunction()};
    
function myFunction() {
  let x = document.getElementById("post_title");
  let toSlugVal= x.value.replaceAll(' ', '-').toLowerCase();
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

