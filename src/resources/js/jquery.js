$(function () {
    $("#getBookInfo").click(function (e) {
        e.preventDefault();

        let url = "https://www.googleapis.com/books/v1/volumes?q=";

        const title = $("#title").val();
        const author = $("#author").val();
        const isbn = $("#isbn").val();

        if(title != "")
        {
            url = url + "intitle:" + title
        }
        if(author != "")
        {
            url = url + "inauthor:" + author
        }
        if(isbn != "")
        {
            url = url + "isbn:" + isbn
        }

        $.getJSON(url,function(data){
            console.log(data);
            if(data != null){
                $("#bookTitle").text("hogehoge"/*data[0].volumeInfo.title*/);
            }
        });
    });
});
