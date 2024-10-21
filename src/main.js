function generateSignature() {
    const firstName = document.getElementById('firstName').value;
    const title = document.getElementById('title').value;
    const phoneNumber = document.getElementById('phoneNumber').value;
    const extension = document.getElementById('extension').value;
    const email = document.getElementById('email').value;

    const signatureHTML = `
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
    <html>
    <head>
        <title>Firma Corporativa</title>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    </head>
    <body style="font-size: 12pt; font-family: Arial, sans-serif; text-decoration: none;">
        <table cellspacing="0" cellpadding="0" style="font-family: Arial, sans-serif; width:600px; background: transparent !important; border-collapse: collapse; border: none;">
            <tbody>
                <tr>
                    <td style="vertical-align: middle;">
                        <table cellspacing="0" cellpadding="0" style="background: transparent !important;">
                            <tbody>
                                <tr>
                                    <td style="text-align: center; padding-right: 10px;">
                                        <img style="width:100%; border:none;" src="https://launioncorp.com/wp-content/uploads/imagen/LogoFirma.png">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td style="padding-right: 10px;"></td>
                    <td width="310" valign="bottom">
                        <table cellspacing="0" cellpadding="0" style="width: 285px; background: transparent !important; border: none;">
                            <tbody>
                                <tr>
                                    <td style="padding-bottom: 13px;">
                                        <span style="font-size: 14pt; color: #e64444; font-family: Arial, sans-serif; line-height: 19pt"><strong>${firstName}</strong></span><br>
                                        <span style="font-size: 12pt; line-height: 14pt; font-family: Arial, sans-serif; color: #393939; font-weight: bold;">${title}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-top: 13px; font-size: 11pt; line-height: 14pt; font-family: Arial, sans-serif; color: #2e666b;">
                                        <a href="mailto:${email}" style="font-size: 11pt; font-family: Arial, sans-serif; color: #2e666b; text-decoration: none;">${email}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-size: 9pt; line-height: 14pt; font-family: Arial, sans-serif; color: #393939;">
                                        <span>${phoneNumber ? `Teléfono: (+34) ${phoneNumber.replace(/\B(?=(\d{3})+(?!\d))/g, ' ')}` : ''}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-size: 9pt; line-height: 14pt; font-family: Arial, sans-serif; color: #393939;">
                                        <span>${extension ? `Ext. ${extension}` : ''}</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="padding-top: 15px;">
                        <img width="600" style="width:100%; border:0;" src="https://launioncorp.com/wp-content/uploads/imagen/PieFirma.png">
                    </td>
                </tr>
                <!-- More rows as necessary -->
            </tbody>
        </table>
    </body>
    </html>`;

    document.getElementById('generatedSignature').innerHTML = signatureHTML;
    copySignature();
}

function copySignature() {
    const generatedSignature = document.getElementById('generatedSignature');
    const range = document.createRange();
    range.selectNode(generatedSignature);
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(range);
    document.execCommand('copy');
    window.getSelection().removeAllRanges();
    alert('Firma copiada al portapapeles.');
}
