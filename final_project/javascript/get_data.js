$.getJSON("/final_project/json/data.json", function(data) {
    console.log(data);
    var page = $("body").attr("id");
    console.log(page);
    var title = data[page].title;
    var site_url = data[page].site_url;
    var first = data[page].first;
    var second = data[page].second;
    var third = data[page].third;
    console.log(title);
    

    var firstH = $("#first");
    var secondH = $("#second");
    var thirdH = $("#third");
    
    firstH.text(first);
    secondH.text(second);
    thirdH.text(third);
    
});