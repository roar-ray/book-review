$(function () {
    $("#getBookInfo").click(function (e) {
        e.preventDefault();
        const isbn = $("#isbn").val();
        const url = "https://api.openbd.jp/v1/get?isbn=" + isbn;

        $.getJSON(url, function (data) {
            if (data[0] != null) {
                if (data[0].summary.cover == "") {
                    $(".thumbnail").html('<img src="" />');
                } else {
                    $(".thumbnail").html(
                        '<img src="' +
                            data[0].summary.cover +
                            '" style="border:solid 1px #000000" />'
                    );
                }
                $("#title").text(data[0].summary.title);
                $("#publisher").text(data[0].summary.publisher);
                $("#author").text(data[0].summary.author);
                $("#pubdate").text(data[0].summary.pubdate);
                $("#description").text(
                    data[0].onix.CollateralDetail.TextContent[0].Text
                );
            }
        });
    });
});
