<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Firma Corporativa</title>
    <style>
        label {
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Generador de Firma Corporativa</h1>
    <form id="signatureForm">
        <label for="firstName">Nombre:</label>
        <input type="text" id="firstName" name="firstName" required>
        <br>
        <label for="title">Puesto de trabajo:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="phoneNumber">Teléfono:</label>
        <input type="text" id="phoneNumber" name="phoneNumber" required>
        <br>
        <label for="extension">Extensión:</label>
        <input type="text" id="extension" name="extension" required>
        <br>
        <label for="email">Correo:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <button type="button" onclick="generateSignature()">Crear Firma</button>
    </form>

    <hr>

    <h2>Vista de Firma Generada</h2>
    <div id="generatedSignature"></div>
    <button id="copyButton" onclick="copySignature()">Copiar Firma</button>

    <script>
        function generateSignature() {
            const firstName = document.getElementById('firstName').value;
            const title = document.getElementById('title').value;
            const phoneNumber = document.getElementById('phoneNumber').value;
            const extension = document.getElementById('extension').value;
            const email = document.getElementById('email').value;


            const signatureHTML = `
            <HTML>

<HEAD>
   <TITLE>Firma Corporativa</TITLE>
   <META content="text/html; charset=utf-8" http-equiv=Content-Type>
</HEAD>

<BODY style="font-size: 10pt; font-family: Arial, sans-serif;">
   <table cellspacing="0" cellpadding="0" border="0" style="font-family: Arial, sans-serif; color: #0000ff; width:600px; background: transparent !important;">
      <tbody>
         <tr>
            <td width="250" style="vertical-align: middle;">
               <table cellspacing="0" cellpadding="0" width="250" style="background: transparent !important;">
                  <tbody>
                     <tr>
                        <td style="text-align: center; padding-bottom: 15px;"><img border="0" style="width:100%; border:0;" src="https://i.ibb.co/cwgcSsy/1.png"></td>
                     </tr>
                  </tbody>
               </table>
            </td>

            <td style="width: 25px;"></td>
            <td style="width: 15px; border-left: solid #e64444;"></td>
            <td style="width: 20px;"></td>
            <td style="width: 300px;" valign="bottom">
               <table cellspacing="0" cellpadding="0" style="width: 285px; background: transparent !important;">
                  <tbody>
                     <tr>
                        <td style="padding-bottom: 13px;"><span style="FONT-SIZE: 14pt; COLOR: #e64444; font-family: Arial, sans-serif; line-height: 19pt"><strong>%%FirstName%%</strong></span><span style="FONT-SIZE: 12pt; line-height: 14pt; font-family: Arial, sans-serif; COLOR: #393939; font-weight: bold;"><br>%%Title%%</span></td>
                     </tr>
                     <tr>
                        <td style="padding-top: 13px; FONT-SIZE: 11pt; line-height: 14pt; font-family: Arial, sans-serif; COLOR: #2e666b;"><a href="mailto:%%Correo%%" style="font-size: 11pt; font-family: Arial, sans-serif; color: #2e666b; text-decoration: none;"><span style="font-size: 11pt; font-family: Arial, sans-serif; color: #2e666b; text-decoration: none;">%%email2%%</span></a></td>
                     </tr>
                     <tr>
                        <td style="FONT-SIZE: 9pt; line-height: 14pt; font-family: Arial, sans-serif; COLOR: #393939;"><span style="FONT-SIZE: 11pt; line-height: 14pt; font-family: Arial, sans-serif; COLOR: #393939;">Teléfono: (+34) %%PhoneNumber%%</span></td>
                     </tr>
                     <tr>
                        <td style="FONT-SIZE: 9pt; line-height: 14pt; font-family: Arial, sans-serif; COLOR: #393939;"><span style="FONT-SIZE: 11pt; line-height: 14pt; font-family: Arial, sans-serif; COLOR: #393939;">950 58 080 00 Ext. %%MobileNumber%%</span></td>
                     </tr>
                     <tr>
                        <td style="padding-top: 26px; FONT-SIZE: 12pt; line-height: 14pt; font-family: Arial, sans-serif; COLOR: #393939;"><span style="FONT-SIZE: 11pt; line-height: 14pt; font-family: Arial, sans-serif; COLOR: #393939;">Pol. Industrial La Redonda N-340, Km 814</span>
                           <span style="FONT-SIZE: 11pt; line-height: 14pt; font-family: Arial, sans-serif; COLOR: #393939;">04700 El Ejido, Almería</span>
                           <a href="http://www.launioncorp.com" target="_blank" rel="noopener" style="text-decoration:none; color:#393939; font-family:Arial, sans-serif; font-size:9pt"><span style="text-decoration:none; color:#e64444; font-family:Arial, sans-serif; font-size:11pt">www.launioncorp.com</span></a>
                        </td>
                     </tr>
                     <tr>
                        <td style="padding-top: 13px; padding-bottom: 2px; text-decoration: none;">
                           <span>
                              <a href="https://www.linkedin.com/company/alhondiga-launion/" target="_blank" rel="noopener" style="text-decoration: none;">
                                 <img border="0" width="14" style="border:0; height:24px; width:24px" src="https://i.ibb.co/q7RHSYv/linkedin.png">
                              </a>&nbsp;
                           </span>
                           <span>
                              <a href="https://www.facebook.com/Launioncorp/" target="_blank" rel="noopener" style="text-decoration: none;">
                                 <img border="0" width="14" style="border:0; height:24px; width:24px" src="https://i.ibb.co/YXNH3Bj/facebook.png">
                              </a>&nbsp;
                           </span>
                           <span>
                              <a href="https://twitter.com/launioncorp" target="_blank" rel="noopener" style="text-decoration: none;">
                                 <img border="0" width="14" style="border:0; height:24px; width:24px" src="https://i.ibb.co/KNyBWr9/gorjeo.png">
                              </a>&nbsp;
                           </span>
                           <span>
                              <a href="https://www.youtube.com/channel/UCQHtWvHTuVb8uJMnH0Op46w" target="_blank" rel="noopener" style="text-decoration: none;">
                                 <img border="0" width="14" style="border:0; height:24px; width:24px" src="https://i.ibb.co/5X3RcY4/youtube.png">
                              </a>&nbsp;
                           </span>
                           <span>
                              <a href="https://www.instagram.com/launioncorp/" target="_blank" rel="noopener" style="text-decoration: none;">
                                 <img border="0" width="14" style="border:0; height:24px; width:24px" src="https://i.ibb.co/9NJtvTk/instagram.png">
                              </a>
                           </span>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </td>
         </tr>
         <tr>
            <td colspan="5" style="padding-top: 15px;"><img border="0" width="600" style="width:100%; border:0;" src="https://i.ibb.co/pKYJMwG/template.png"></td>
         </tr>
         <tr>
            <td colspan="5" style="padding-top: 15px; padding-bottom: 15px;">
               <table cellspacing="0" cellpadding="0" border="0" style="width: 350px; background: transparent !important;">
                  <tbody>
                     <tr>
                        <td style="width: 0px;"><img border="0" height="14" width="12" style="border:0; height:14px; width:12px;" src="https://www.mail-signatures.com/signature-generator/img/templates/csr/icon.png"></td>
                        <td><span style="font-size: 9pt; line-height: 13pt; font-family: Arial, sans-serif;color: #000000;"> <strong>Sea ecológico</strong>- No imprima este correo si no es necesario.</span></td>
                     </tr>
                  </tbody>
               </table>
            </td>
         </tr>
         <tr>
            <td colspan="5" style="margin-top: 15px; background: #00000010; padding: 7px; border-radius: 10px 10px 10px 10px;">
               <p style="font-size: 7pt; font-family: Arial, sans-serif;color: #4d4d4d; text-align: justify;"> Este mensaje y sus adjuntos contienen información confidencial y reservada dirigida exclusivamente a su destinatario. Si ha recibido este mensaje por error, se ruega lo notifique inmediatamente por esta misma vía y borre el mensaje de su sistema. Nótese que el correo electrónico vía Internet no permite asegurar ni la confidencialidad de los mensajes que se transmiten ni la correcta recepción de los mismos. En cumplimiento de la normativa vigente en materia de Protección de Datos de Carácter Personal, le informamos que los datos derivados de su correspondencia serán tratados por ALHONDIGA LA UNIÓN, S.A. con la finalidad de gestionar las comunicaciones que pudiera mantener con el personal de la entidad. Los datos personales proporcionados se conservarán, mientras no se solicite su supresión por el interesado o se mantenga la relación con esta empresa. La legitimación para el tratamiento de datos se basa en la relación que mantiene con esta empresa. Para darse de baja o ejercer sus derechos de acceso, rectificación, supresión, limitación de tratamiento, oposición, portabilidad, derecho a no ser objeto de decisiones individualizadas así como la revocación del consentimiento prestado, puede realizarlo dirigiéndose por escrito a la dirección Paraje La Redonda S/n Ctra. De Málaga Km 814-04700 El Ejido (Almería) o por mail a dpd@launioncorp.com</p>
               <p style="font-size: 7pt; font-family: Arial, sans-serif;color: #4d4d4d; text-align: justify;">ALHONDIGA LA UNIÓN, S.A. tiene implantadas políticas activas y procedimientos dirigidos a la prevención de riesgos penales, así mismo se rige por un Código de conducta que es de obligado cumplimiento para todas las personas físicas o jurídicas que entablen relación comercial con la misma. El Código de Conducta puede ser consultado en la página web corporativa, www.launioncorp.com. El incumplimiento del Código de Conducta supondrá el fin de la relación comercial o de otro tipo que haya sido establecida.</p>
            </td>
         </tr>
      </tbody>
   </table>
</BODY>

</HTML>
            `;

            // Reemplazar los marcadores de posición con los valores ingresados
            const generatedHTML = signatureHTML
                .replace('%%FirstName%%', firstName)
                .replace('%%LastName%%', '')
                .replace('%%Title%%', title)
                .replace('%%Correo%%', email)
                .replace('%%Email%%', email)
                .replace('%%PhoneNumber%%', phoneNumber)
                .replace('%%MobileNumber%%', extension);

            document.getElementById('generatedSignature').innerHTML = generatedHTML;
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
    </script>
</body>
</html>
