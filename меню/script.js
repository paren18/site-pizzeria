
(function(){
var boxes=[],els,i,l;
if(document.querySelectorAll){
els=document.querySelectorAll('a[rel=simplebox]');  
Box.getStyles('simplebox_css','simplebox.css');
Box.getScripts('simplebox_js','simplebox.js',function(){
simplebox.init();
for(i=0,l=els.length;i<l;++i)
simplebox.start(els[i]);
simplebox.start('a[rel=simplebox_group]');      
});
}
})();


