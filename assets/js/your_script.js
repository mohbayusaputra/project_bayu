function viewPdf(pdfId) {
    const pdfUrl = `/pages/retrieve_pdf.php?id=${pdfId}`;

    pdfjsLib.getDocument(pdfUrl).promise.then(function(pdfDoc) {
        return pdfDoc.getPage(1);
    }).then(function(page) {
        const canvas = document.createElement('canvas');
        const context = canvas.getContext('2d');
        const viewport = page.getViewport({ scale: 1.5 });

        canvas.width = viewport.width;
        canvas.height = viewport.height;

        const renderContext = {
            canvasContext: context,
            viewport: viewport
        };

        page.render(renderContext);

        document.body.appendChild(canvas);
    });
}
