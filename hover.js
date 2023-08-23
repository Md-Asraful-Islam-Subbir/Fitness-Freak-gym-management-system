const gallery=document.getElementById('gallery');
const flow=document.getElementById('flow');
gallery.addEventListener('click',function(){
if(flow.style.display=='block'){
    flow.style.display='none';
}
else{
    flow.style.display='block';
}
})

