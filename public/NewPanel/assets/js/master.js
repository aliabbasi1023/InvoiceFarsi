let btn_header = document.querySelectorAll('#main_sec .inner_main_sec .icon-d')
let li_menu_main = document.querySelectorAll('.main #main_menu #menu_box >#menu_box_inner >.accordion-item >.accordion-header >button')
let li_menu_main_toggle = document.querySelectorAll('.main #toggle_menu #menu_box_toggle >#menu_box_toggle_inner >.accordion-item >.accordion-header >button')
let header_list_lvl1 = document.querySelectorAll('.main #main_menu #menu_box >#menu_box_inner >.accordion-item .accordion-body .accordion >.accordion-item >.accordion-header >button')
let header_list_lvl1_toggle = document.querySelectorAll('.main #toggle_menu #menu_box_toggle >#menu_box_toggle_inner >.accordion-item .accordion-body .accordion >.accordion-item >.accordion-header >button')
let _shadow = document.getElementsByClassName('shadow1')

    // *****************height menu main
    document.getElementById('menu_box').style.height = `calc( 100vh - ${(document.getElementById('logo_farsi').clientHeight+document.getElementsByClassName('line_box')[0].clientHeight + document.getElementsByClassName('line_box')[1].clientHeight+document.getElementById('search_box').clientHeight)}px)`
    
    // *****************height menu toggle
    document.getElementById('menu_box_toggle').style.height = `calc( 100vh - ${(document.getElementById('logo_farsi_toggle').clientHeight+document.getElementsByClassName('line_box_t')[0].clientHeight + document.getElementsByClassName('line_box_t')[1].clientHeight+document.getElementById('search_box_toggle').clientHeight)}px)`

// resize
function _resize(){

    // *******height menu main
    document.getElementById('menu_box').style.height = `calc( 100vh - ${(document.getElementById('logo_farsi').clientHeight+document.getElementsByClassName('line_box')[0].clientHeight + document.getElementsByClassName('line_box')[1].clientHeight+document.getElementById('search_box').clientHeight)}px)`
    
    // *******height menu toggle
    document.getElementById('menu_box_toggle').style.height = `calc( 100vh - ${(document.getElementById('logo_farsi_toggle').clientHeight+document.getElementsByClassName('line_box_t')[0].clientHeight + document.getElementsByClassName('line_box_t')[1].clientHeight+document.getElementById('search_box_toggle').clientHeight)}px)`
    
}



// *************************************************toggle for menu

document.querySelector('#icon_toggle>div').addEventListener('click' , function(){
  document.getElementById('toggle_menu').style.right='0px'
//   document.getElementById('toggle_menu').classList.add('ps-2')
  _shadow[0].style.height ='100%'
  _shadow[0].style.width ='100%'
})

_shadow[0].addEventListener('click' , function(){
  document.getElementById('toggle_menu').style.right='-1000px' 
  _shadow[0].style.height ='0'
  _shadow[0].style.width ='0'
})





// *************************************************click menu main header
// for (let i = 0; i < li_menu_main.length; i++) {
//     li_menu_main[i].onclick= function () {
//         let status = this.getAttribute('data-click')
//         if (status =='off') {
//             this.style.background='linear-gradient(90deg, rgba(197,32,40,1) 26%, rgba(219,35,45,0.938813025210084) 64%, rgba(249,91,98,1) 100%)'
//             this.style.color='#f4f5fa'
//             this.setAttribute('data-click' , 'on')
            
//         }else{
//             this.style.background='none'
//             this.style.color='rgb(34, 34, 34)'
//             this.setAttribute('data-click' , 'off')
//         }
//     }
// }
// *************************************************click menu toggle header
// for (let i = 0; i < li_menu_main_toggle.length; i++) {
//     li_menu_main_toggle[i].onclick= function () {
//         let status = this.getAttribute('data-click')
//         if (status =='off') {
//             this.style.background='linear-gradient(90deg, rgba(197,32,40,1) 26%, rgba(219,35,45,0.938813025210084) 64%, rgba(249,91,98,1) 100%)'
//             this.style.color='#f4f5fa'
//             this.setAttribute('data-click' , 'on')
            
//         }else{
//             this.style.background='none'
//             this.style.color='rgb(34, 34, 34)'
//             this.setAttribute('data-click' , 'off')
//         }
//     }
// }
// *************************************************hover icons of header
for (let i = 0; i < btn_header.length; i++) {
    btn_header[i].onmouseenter= function () {
        this.style.backgroundColor ='rgb(210, 210, 212)'
    }
    
}
for (let i = 0; i < btn_header.length; i++) {
    btn_header[i].onmouseleave= function () {
        this.style.backgroundColor ='rgb(244,245,250)'
    }
    
}
$(function () {
    $("#country").select2();
});
