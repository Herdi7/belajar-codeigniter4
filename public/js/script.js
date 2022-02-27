function imgUrl() {
    let filenames = [];
    let files = document.getElementById("imgFile").files;
    if (files.length > 1) {
        filenames.push("Total Files (" + files.length + ")");
    } else {
        for (let i in files) {
            if (files.hasOwnProperty(i)) {
                filenames.push(files[i].name);
            }
        }
    }
    $(this)
        .next(".custom-file-label")
        .html(filenames.join(","));
}