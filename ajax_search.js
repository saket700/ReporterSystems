function handleSearchSuggest() {
    if (searchReq.readyState == 4) {
        var ss = document.getElementById('search_suggest')                  
        ss.innerHTML = ''; 
        if(document.getElementById('Search').value.length > 2)
        { 
        var str = searchReq.responseText.split("\n"); 
            for(i=0; i < str.length - 1; i++) {
                //Build our element string.  This is cleaner using the DOM, but
                //IE doesn't support dynamically added attributes.
                var suggest = '<div onmouseover="javascript:suggestOver(this);" ';
                suggest += 'onmouseout="javascript:suggestOut(this);" ';
                suggest += 'onclick="javascript:setSearch(this.innerHTML);" ';
                suggest += 'class="suggest_link">' + str[i] + '</div>';
                ss.innerHTML += suggest;
            }
        }
        else
        {
            ss.innerHTML = 'Please insert at least 3 characters';
        }
    }
}

//Mouse over function
function suggestOver(div_value) {
    div_value.className = 'suggest_link_over';
}
//Mouse out function
function suggestOut(div_value) {
    div_value.className = 'suggest_link';
}
//Click function
function setSearch(value) {
    document.getElementById('Search').value = value;
    document.getElementById('search_suggest').innerHTML = '';
}