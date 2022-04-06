function changeDropdown() {
    var state=document.getElementById("mySelect").value;
    if(state=="SC"||state=="DD")
    {
        document.getElementById("height").style.visibility='hidden';
        document.getElementById("width").style.visibility='hidden';
        document.getElementById("length").style.visibility='hidden';
        document.getElementById("weight").style.visibility='hidden';
    }
    if(state=="SC"||state=="BK")
    {
        document.getElementById("size").style.visibility='hidden';
        document.getElementById("height").style.visibility='hidden';
        document.getElementById("width").style.visibility='hidden';
        document.getElementById("length").style.visibility='hidden';
    }
    if(state=="SC"||state=="FT")
    {
        document.getElementById("size").style.visibility='hidden';
        document.getElementById("weight").style.visibility='hidden';
    }
 
}