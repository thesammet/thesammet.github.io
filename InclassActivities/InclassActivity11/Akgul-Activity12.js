$(document).ready(function () {
    $("nav#nav_list a").click(function (event) {
        event.preventDefault();

        var jsonFileName = $(this).attr("title") + ".json";

        $("main").empty();

        $.ajax({
            url: "json_files/" + jsonFileName,
            method: "GET",
            dataType: "json",
            success: function (response) {
                var speakerData = response.speakers[0];

                var speakerHTML = '<h1>' + speakerData.title + '</h1>' +
                    '<img src="' + speakerData.image + '">' +
                    '<h2>' + speakerData.month + '<br>' + speakerData.speaker + '</h2>' +
                    '<p>' + speakerData.text + '</p>';

                $("main").html(speakerHTML);
            },
            error: function (error) {
                console.error("Ajax isteği başarısız oldu:", error);
            }
        });
    });

});
