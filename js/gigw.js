(function () {
  var FONT_KEY = "fsez-gigw-font";
  var CONTRAST_KEY = "fsez-gigw-contrast";
  var LANG_KEY = "fsez-gigw-lang";
  var steps = ["small", "normal", "large", "xlarge"];
  var zooms = { small: "90%", normal: "100%", large: "115%", xlarge: "130%" };

  var I18N = {
    hi: {
      "Skip to main content": "मुख्य विषयवस्तु पर जाएँ",
      "Screen Reader Access": "स्क्रीन रीडर पहुँच",
      "Help": "सहायता",
      "Text size": "अक्षर आकार",
      "High Contrast": "उच्च कंट्रास्ट",
      "Normal Contrast": "सामान्य कंट्रास्ट",
      "Select Language": "भाषा चुनें",
      "Search": "खोजें",
      "Search this website": "इस वेबसाइट में खोजें",
      "Government of India": "भारत सरकार",
      "Office of the Development Commissioner": "विकास आयुक्त का कार्यालय",
      "Falta Special Economic Zone": "फालता विशेष आर्थिक क्षेत्र",
      "Office of the Development Commissioner": "विकास आयुक्त का कार्यालय",
      "Departmental Updates": "विभागीय अद्यतन",
      "View all": "सभी देखें",
      "Read more": "और पढ़ें",
      "Important links": "महत्वपूर्ण लिंक",
      "Unit Sign Up": "इकाई पंजीकरण",
      "FSEZ Statistics": "एफएसईजेड सांख्यिकी",
      "State Presence": "राज्य उपस्थिति",
      "Number of SEZ": "एसईजेड की संख्या",
      "Export (Cr)": "निर्यात (करोड़)",
      "Employment": "रोजगार",
      "View gallery": "गैलरी देखें",
      "Ministry of Commerce & Industry | Department of Commerce": "वाणिज्य एवं उद्योग मंत्रालय | वाणिज्य विभाग",
      "Home": "मुखपृष्ठ",
      "About": "परिचय",
      "FSEZ at a Glance": "एक दृष्टि में एफएसईजेड",
      "Jurisdiction": "क्षेत्राधिकार",
      "Performance": "प्रदर्शन",
      "Organisational Structure": "संगठनात्मक संरचना",
      "How to Reach Falta SEZ": "फालता एसईजेड कैसे पहुँचें",
      "How To Setup a SEZ": "एसईजेड कैसे स्थापित करें",
      "How to Setup a Unit in SEZ": "एसईजेड में इकाई कैसे स्थापित करें",
      "List of Units under FSEZ": "एफएसईजेड की इकाइयों की सूची",
      "List of EOUs under FSEZ": "एफएसईजेड के ईओयू की सूची",
      "Authority": "प्राधिकरण",
      "Constitution": "गठन",
      "Infrastructure": "अवसंरचना",
      "Tariff": "टैरिफ",
      "Authority Meeting": "प्राधिकरण बैठक",
      "Authority Meeting Agenda": "प्राधिकरण बैठक एजेंडा",
      "Authority Meeting Minutes": "प्राधिकरण बैठक कार्यवृत्त",
      "Unit Rent Status": "इकाई किराया स्थिति",
      "Annual Report": "वार्षिक रिपोर्ट",
      "Sample Lease Agreement": "नमूना पट्टा समझौता",
      "Electricity Duty Exemption": "विद्युत शुल्क छूट",
      "UAC": "यूएसी",
      "SEZ Meeting": "एसईजेड बैठक",
      "UAC Meeting Agenda": "यूएसी बैठक एजेंडा",
      "UAC Meeting Minutes": "यूएसी बैठक कार्यवृत्त",
      "EOU Meeting": "ईओयू बैठक",
      "EOU Meeting Agenda": "ईओयू बैठक एजेंडा",
      "EOU Meeting Minutes": "ईओयू बैठक कार्यवृत्त",
      "DOC": "डीओसी",
      "BOA": "बीओए",
      "BOA Meeting Agenda": "बीओए बैठक एजेंडा",
      "BOA Meeting Minutes": "बीओए बैठक कार्यवृत्त",
      "Instructions": "निर्देश",
      "Rules and Amendments": "नियम और संशोधन",
      "Other Info": "अन्य जानकारी",
      "Other SEZs": "अन्य एसईजेड",
      "Other Links & Policies": "अन्य लिंक और नीतियाँ",
      "Forms": "प्रपत्र",
      "SEZ Forms": "एसईजेड प्रपत्र",
      "EOU Forms": "ईओयू प्रपत्र",
      "Quick Links": "त्वरित लिंक",
      "SEZ Rules & Acts": "एसईजेड नियम और अधिनियम",
      "Circulars & Policies": "परिपत्र और नीतियाँ",
      "Tenders": "निविदाएँ",
      "Vacancies": "रिक्तियाँ",
      "CPGRAMS": "सीपीग्राम्स",
      "Media": "मीडिया",
      "Interview": "साक्षात्कार",
      "Photo Gallery": "फोटो गैलरी",
      "Video Gallery": "वीडियो गैलरी",
      "Public Notice": "सार्वजनिक सूचना",
      "Achievements": "उपलब्धियाँ",
      "RTI": "आरटीआई",
      "Point of Contact": "संपर्क बिंदु",
      "Transparency Audit": "पारदर्शिता लेखा परीक्षा",
      "Contact": "संपर्क",
      "Latest updates": "ताज़ा अपडेट",
      "Pause updates": "अपडेट रोकें",
      "Play updates": "अपडेट चलाएँ",
      "Pause slideshow": "स्लाइड शो रोकें",
      "Play slideshow": "स्लाइड शो चलाएँ",
      "Feedback": "प्रतिपुष्टि",
      "Content owned, maintained and updated by the Office of the Development Commissioner, Falta Special Economic Zone, Department of Commerce, Ministry of Commerce and Industry, Government of India.": "इस सामग्री का स्वामित्व, रखरखाव और अद्यतन विकास आयुक्त कार्यालय, फालता विशेष आर्थिक क्षेत्र, वाणिज्य विभाग, वाणिज्य एवं उद्योग मंत्रालय, भारत सरकार के पास है।",
      "Designed, developed and hosted by": "डिज़ाइन, विकास और होस्टिंग",
      "Gatepass Portal": "गेटपास पोर्टल",
      "Pay Your Rent": "किराया भुगतान करें",
      "Unit - Sign Up": "इकाई - पंजीकरण",
      "About Falta SEZ": "फालता एसईजेड के बारे में",
      "FSEZ Links": "एफएसईजेड लिंक",
      "SEZ Online": "एसईजेड ऑनलाइन",
      "Contact Us": "संपर्क करें",
      "Policies": "नीतियाँ",
      "FAQ": "अक्सर पूछे जाने वाले प्रश्न",
      "Accessibility statement": "सुलभता विवरण",
      "Disclaimer": "अस्वीकरण",
      "Privacy Policy": "गोपनीयता नीति",
      "Terms and Conditions": "नियम और शर्तें",
      "Copyright Policy": "कॉपीराइट नीति",
      "Hyperlinking Policy": "हाइपरलिंकिंग नीति",
      "Sitemap": "साइट मैप",
      "Related links": "संबंधित लिंक",
      "National Portal of India": "भारत का राष्ट्रीय पोर्टल",
      "Silpa Sathi Portal": "शिल्प साथी पोर्टल",
      "Vigilance": "सतर्कता",
      "Right to Information": "सूचना का अधिकार",
      "Contact us": "संपर्क करें",
      "Office of the Development Commissioner": "विकास आयुक्त का कार्यालय",
      "Departmental Updates": "विभागीय अद्यतन",
      "View all": "सभी देखें",
      "Read more": "और पढ़ें",
      "Important links": "महत्वपूर्ण लिंक",
      "Unit Sign Up": "इकाई पंजीकरण",
      "FSEZ Statistics": "एफएसईजेड सांख्यिकी",
      "State Presence": "राज्य उपस्थिति",
      "Number of SEZ": "एसईजेड की संख्या",
      "Export (Cr)": "निर्यात (करोड़)",
      "Employment": "रोजगार",
      "View gallery": "गैलरी देखें",
      "No updates available at present.": "इस समय कोई अद्यतन उपलब्ध नहीं है।",
      "Follow us:": "हमें फ़ॉलो करें:",
      "Follow us": "हमें फ़ॉलो करें",
      "Facebook": "फेसबुक",
      "Twitter": "ट्विटर",
      "Phone:": "दूरभाष:",
      "Email:": "ईमेल:",
      "Welcome to Falta Special Economic Zone": "फालता विशेष आर्थिक क्षेत्र में आपका स्वागत है",
      "West Bengal, Sikkim and Andaman & Nicobar Islands": "पश्चिम बंगाल, सिक्किम और अंडमान एवं निकोबार द्वीप समूह",
      "Circulars": "परिपत्र",
      "Approval Committee agenda for SEZ units": "एसईजेड इकाइयों के लिए अनुमोदन समिति एजेंडा",
      "Online gate-pass application for the zone": "जोन के लिए ऑनलाइन गेटपास आवेदन",
      "Unit rent status and payment details": "इकाई किराया स्थिति और भुगतान विवरण",
      "Register a unit with Falta SEZ": "फालता एसईजेड में इकाई पंजीकृत करें",
      "Developer and unit monitoring system": "डेवलपर और इकाई निगरानी प्रणाली",
      "Departmental circulars and policies": "विभागीय परिपत्र और नीतियाँ",
      "Divisions": "प्रभाग",
      "Services": "सेवाएँ",
      "Other links": "अन्य कड़ियाँ",
      "Public notices": "सार्वजनिक सूचनाएँ",
      "How to setup a unit": "इकाई कैसे स्थापित करें",
      "FSEZ Authority": "एफएसईजेड प्राधिकरण",
      "Export Oriented Units": "निर्यातोन्मुख इकाइयाँ",
      "Welcome to": "आपका स्वागत है",
      "Campus view": "परिसर दृश्य",
      "A dedicated export manufacturing zone near Kolkata": "कोलकाता के निकट समर्पित निर्यात विनिर्माण क्षेत्र",
      "Serving units and developers": "इकाइयों और डेवलपर्स की सेवा",
      "Approvals, facilitation and estate services": "अनुमोदन, सुविधा और संपदा सेवाएँ",
      "Ready industrial campus": "तैयार औद्योगिक परिसर",
      "Connected to Kolkata and Haldia ports": "कोलकाता और हल्दिया बंदरगाहों से जुड़ा",
      "Organisation": "संगठन",
      "Gatepass": "गेटपास",
      "Unit Rent": "इकाई किराया",
      "Identity Card": "पहचान पत्र",
      "SEZ Rules & Acts": "एसईजेड नियम और अधिनियम",
      "List of Units": "इकाइयों की सूची",
      "Units and companies currently operating under Falta Special Economic Zone.": "फालता विशेष आर्थिक क्षेत्र में वर्तमान में कार्यरत इकाइयाँ और कंपनियाँ।",
      "Right to Information": "सूचना का अधिकार",
      "About FSEZ": "एफएसईजेड के बारे में",
      "Falta Special Economic Zone was set up by the Government of India in 1984 and now functions under the SEZ Act and Rules from 10 February 2006.": "फालता विशेष आर्थिक क्षेत्र की स्थापना भारत सरकार द्वारा वर्ष 1984 में की गई थी और अब यह 10 फरवरी 2006 से एसईजेड अधिनियम एवं नियम के अधीन कार्य करता है।",
      "Guidance for setting up a unit in Falta SEZ, including approvals, documentation and the letter of approval process.": "फालता एसईजेड में इकाई स्थापित करने हेतु मार्गदर्शन, जिसमें अनुमोदन, दस्तावेज़ीकरण और अनुमोदन पत्र प्रक्रिया शामिल है।",
      "The Authority develops and maintains estate infrastructure and world-class facilities for units operating in the zone.": "प्राधिकरण जोन में कार्यरत इकाइयों के लिए संपदा अवसंरचना और विश्वस्तरीय सुविधाओं का विकास तथा रखरखाव करता है।",
      "The EOU scheme supports export manufacturing and services under the jurisdiction of the Development Commissioner.": "ईओयू योजना विकास आयुक्त के क्षेत्राधिकार में निर्यात विनिर्माण और सेवाओं का समर्थन करती है।",
      "Agenda": "एजेंडा",
      "Minutes": "कार्यवृत्त",
      "Date of issue": "जारी करने की तिथि",
      "Download": "डाउनलोड",
      "SL": "क्रमांक",
      "PDF": "पीडीएफ",
      "Agendas of the Unit Approval Committee (UAC) for SEZ units under the Office of the Development Commissioner, Falta SEZ.": "फालता एसईजेड, विकास आयुक्त कार्यालय के अधीन एसईजेड इकाइयों हेतु इकाई अनुमोदन समिति (यूएसी) के एजेंडा।",
      "Minutes of the Unit Approval Committee (UAC) for SEZ units under the Office of the Development Commissioner, Falta SEZ.": "फालता एसईजेड, विकास आयुक्त कार्यालय के अधीन एसईजेड इकाइयों हेतु इकाई अनुमोदन समिति (यूएसी) के कार्यवृत्त।",
      "No UAC meeting agenda is available at present.": "इस समय कोई यूएसी बैठक एजेंडा उपलब्ध नहीं है।",
      "No UAC meeting minutes are available at present.": "इस समय कोई यूएसी बैठक कार्यवृत्त उपलब्ध नहीं है।",
      "S. No.": "क्र.सं.",
      "Serial number": "क्रम संख्या",
      "Title of document": "दस्तावेज़ का शीर्षक",
      "Download (format and size)": "डाउनलोड (प्रारूप और आकार)",
      "Not available": "उपलब्ध नहीं",
      "List of UAC meeting agenda documents": "यूएसी बैठक एजेंडा दस्तावेज़ों की सूची",
      "List of UAC meeting minutes documents": "यूएसी बैठक कार्यवृत्त दस्तावेज़ों की सूची",
      "The table can be scrolled horizontally on a smaller screen.": "छोटे पर्दे पर तालिका को क्षैतिज रूप से स्क्रॉल किया जा सकता है।",
      "(opens in a new window)": "(नए विंडो में खुलता है)",
      "(opens an external website in a new window)": "(बाहरी वेबसाइट नए विंडो में खुलती है)",
      "(current page)": "(वर्तमान पृष्ठ)",
      "Circular / Policy Name": "परिपत्र / नीति का नाम",
      "List of circulars and policies": "परिपत्रों और नीतियों की सूची",
      "No circular is available at present.": "इस समय कोई परिपत्र उपलब्ध नहीं है।",
      "Go to Archive": "अभिलेखागार पर जाएँ",
      "Circulars issued by the Office of the Development Commissioner, Falta SEZ, in the last 12 months. Policies issued by DGFT and the Department of Commerce are listed under": "विकास आयुक्त कार्यालय, फालता एसईजेड द्वारा पिछले 12 महीनों में जारी परिपत्र। डीजीएफटी और वाणिज्य विभाग द्वारा जारी नीतियाँ यहाँ सूचीबद्ध हैं",
      "Archive": "अभिलेखागार",
      "Tender / Notice": "निविदा / सूचना",
      "Vacancy notification": "रिक्ति अधिसूचना",
      "Forms / Notices / Instructions": "प्रपत्र / सूचनाएँ / निर्देश",
      "Forms & Notices": "प्रपत्र और सूचनाएँ",
      "List of tenders and notices": "निविदाओं और सूचनाओं की सूची",
      "List of vacancy notifications": "रिक्ति अधिसूचनाओं की सूची",
      "List of forms, notices and instructions": "प्रपत्रों, सूचनाओं और निर्देशों की सूची",
      "List of EOU meeting agenda documents": "ईओयू बैठक एजेंडा दस्तावेज़ों की सूची",
      "List of EOU meeting minutes documents": "ईओयू बैठक कार्यवृत्त दस्तावेज़ों की सूची",
      "List of authority meeting agenda documents": "प्राधिकरण बैठक एजेंडा दस्तावेज़ों की सूची",
      "List of authority meeting minutes documents": "प्राधिकरण बैठक कार्यवृत्त दस्तावेज़ों की सूची",
      "No tender is available at present.": "इस समय कोई निविदा उपलब्ध नहीं है।",
      "No vacancy is available at present.": "इस समय कोई रिक्ति उपलब्ध नहीं है।",
      "No form or notice is available at present.": "इस समय कोई प्रपत्र या सूचना उपलब्ध नहीं है।",
      "No EOU meeting agenda is available at present.": "इस समय कोई ईओयू बैठक एजेंडा उपलब्ध नहीं है।",
      "No EOU meeting minutes are available at present.": "इस समय कोई ईओयू बैठक कार्यवृत्त उपलब्ध नहीं है।",
      "No authority meeting agenda is available at present.": "इस समय कोई प्राधिकरण बैठक एजेंडा उपलब्ध नहीं है।",
      "No authority meeting minutes are available at present.": "इस समय कोई प्राधिकरण बैठक कार्यवृत्त उपलब्ध नहीं है।",
      "Form / Application / Annexure": "प्रपत्र / आवेदन / अनुलग्नक",
      "Instruction": "निर्देश",
      "Particulars": "विवरण",
      "Department of Commerce": "वाणिज्य विभाग",
      "List of SEZ forms and applications": "एसईजेड प्रपत्रों और आवेदनों की सूची",
      "List of EOU forms and applications": "ईओयू प्रपत्रों और आवेदनों की सूची",
      "List of Department of Commerce instructions": "वाणिज्य विभाग के निर्देशों की सूची",
      "List of FSEZ agenda documents": "एफएसईजेड एजेंडा दस्तावेज़ों की सूची",
      "No SEZ form is available at present.": "इस समय कोई एसईजेड प्रपत्र उपलब्ध नहीं है।",
      "No EOU form is available at present.": "इस समय कोई ईओयू प्रपत्र उपलब्ध नहीं है।",
      "No instruction is available at present.": "इस समय कोई निर्देश उपलब्ध नहीं है।",
      "No agenda is available at present.": "इस समय कोई एजेंडा उपलब्ध नहीं है।",
      "Screen Reader": "स्क्रीन रीडर",
      "Screen readers let people with visual impairments use this website with assistive technology. The site can be used with screen readers such as JAWS, NVDA, SAFA, Supernova and Window-Eyes.": "स्क्रीन रीडर दृष्टिबाधित लोगों को सहायक तकनीक से इस वेबसाइट का उपयोग करने देते हैं। यह साइट JAWS, NVDA, SAFA, Supernova और Window-Eyes जैसे स्क्रीन रीडरों के साथ प्रयोग की जा सकती है।",
      "The table below lists information about different screen readers": "नीचे दी गई तालिका में विभिन्न स्क्रीन रीडरों की जानकारी है",
      "List of screen readers with their websites and whether they are free or commercial": "स्क्रीन रीडरों की सूची, उनकी वेबसाइटें और वे निःशुल्क हैं या व्यावसायिक",
      "Website": "वेबसाइट",
      "Free / Commercial": "निःशुल्क / व्यावसायिक",
      "Free": "निःशुल्क",
      "Commercial": "व्यावसायिक",
      "Website Help": "वेबसाइट सहायता",
      "How to use this website": "इस वेबसाइट का उपयोग कैसे करें",
      "This website follows the Guidelines for Indian Government Websites (GIGW 3.0) and Web Content Accessibility Guidelines (WCAG 2.1 Level AA).": "यह वेबसाइट भारतीय सरकारी वेबसाइटों के दिशानिर्देश (GIGW 3.0) और वेब सामग्री सुलभता दिशानिर्देश (WCAG 2.1 स्तर AA) का पालन करती है।",
      "Press Tab on page load to reach the “Skip to main content” link. Activate it to move past the header and menu.": "पृष्ठ खुलने पर Tab दबाकर “मुख्य विषयवस्तु पर जाएँ” लिंक तक पहुँचें। इसे सक्रिय करने पर शीर्ष पट्टी और मेनू के बाद मुख्य भाग खुलता है।",
      "Use A-, A and A+ in the top bar to decrease, reset or increase text size. Your choice is saved in this browser.": "ऊपरी पट्टी में A-, A और A+ से अक्षर आकार घटाएँ, रीसेट करें या बढ़ाएँ। आपका चुनाव इस ब्राउज़र में सहेजा जाता है।",
      "Colour contrast": "रंग कंट्रास्ट",
      "Use High Contrast for yellow text on a black background. Choose Normal Contrast to return to the standard theme.": "काली पृष्ठभूमि पर पीला पाठ के लिए उच्च कंट्रास्ट चुनें। सामान्य थीम पर लौटने के लिए सामान्य कंट्रास्ट चुनें।",
      "Language": "भाषा",
      "Use the language selector in the top bar to choose English, Hindi or Bengali. The default language of this website is English. The Government of India identity is shown as Government of India | भारत सरकार.": "ऊपरी पट्टी के भाषा चयन से अंग्रेज़ी, हिन्दी या बांग्ला चुनें। इस वेबसाइट की मूल भाषा अंग्रेज़ी है। भारत सरकार की पहचान Government of India | भारत सरकार के रूप में दिखाई जाती है।",
      "Screen readers": "स्क्रीन रीडर",
      "See the Screen Reader Access page for compatible assistive technologies such as NVDA and JAWS.": "NVDA और JAWS जैसी सहायक तकनीकों के लिए स्क्रीन रीडर पहुँच पृष्ठ देखें।",
      "Use the search box next to the organisation identity to find news, tenders, circulars, vacancies and forms.": "संगठन के नाम के पास खोज पेटी से समाचार, निविदाएँ, परिपत्र, रिक्तियाँ और प्रपत्र खोजें।",
      "Documents": "दस्तावेज़",
      "Downloadable files open in a new window. Titles indicate PDF or other formats where known.": "डाउनलोड फ़ाइलें नई विंडो में खुलती हैं। जहाँ ज्ञात हो, शीर्षक में पीडीएफ या अन्य प्रारूप लिखा होता है।",
      "Need more help?": "और सहायता चाहिए?",
      "See Frequently Asked Questions or the Contact Us page.": "अक्सर पूछे जाने वाले प्रश्न या संपर्क करें पृष्ठ देखें।",
      "Website Feedback": "वेबसाइट प्रतिपुष्टि",
      "Tell us what works and what does not on this website. We read every submission and reply to the email address you give us. For a formal grievance, please use the": "बताएँ कि इस वेबसाइट पर क्या ठीक है और क्या नहीं। हम प्रत्येक प्रस्तुति पढ़ते हैं और आपके दिए ईमेल पर उत्तर देते हैं। औपचारिक शिकायत के लिए कृपया",
      "public grievance": "लोक शिकायत",
      "route instead.": "मार्ग का उपयोग करें।",
      "Fields marked": "चिह्नित फ़ील्ड",
      "are required.": "आवश्यक हैं।",
      "required": "आवश्यक",
      "(required)": "(आवश्यक)",
      "Your name": "आपका नाम",
      "Email address": "ईमेल पता",
      "We use this only to reply to your feedback.": "हम इसका उपयोग केवल आपकी प्रतिपुष्टि का उत्तर देने के लिए करते हैं।",
      "Phone number (optional)": "फ़ोन नंबर (वैकल्पिक)",
      "Your feedback": "आपकी प्रतिपुष्टि",
      "Include the page name or address if your feedback is about a particular page.": "यदि प्रतिपुष्टि किसी विशेष पृष्ठ के बारे में है तो पृष्ठ का नाम या पता लिखें।",
      "Send feedback": "प्रतिपुष्टि भेजें",
      "Leave this field empty": "इस फ़ील्ड को खाली छोड़ें",
      "Thank you, your feedback has been received": "धन्यवाद, आपकी प्रतिपुष्टि प्राप्त हो गई है",
      "We have recorded your feedback and will reply to you by email if a response is needed. You can also reach the office on": "हमने आपकी प्रतिपुष्टि दर्ज कर ली है और आवश्यकता होने पर ईमेल से उत्तर देंगे। आप कार्यालय से इस नंबर पर भी संपर्क कर सकते हैं",
      "There is a problem with this form": "इस फ़ॉर्म में समस्या है",
      "Enter your name, up to 120 characters.": "अपना नाम लिखें, अधिकतम 120 अक्षर।",
      "Enter an email address in the format name@example.com so we can reply.": "उत्तर के लिए name@example.com प्रारूप में ईमेल पता लिखें।",
      "Enter a phone number using digits, spaces, plus or hyphen only.": "फ़ोन नंबर केवल अंक, स्पेस, प्लस या हाइफ़न से लिखें।",
      "Enter your feedback so we know what to act on.": "कार्रवाई के लिए अपनी प्रतिपुष्टि लिखें।",
      "Shorten your feedback to 5000 characters or fewer.": "प्रतिपुष्टि 5000 अक्षर या उससे कम करें।",
      "We could not save your feedback because of a problem at our end. Please email fsez@nic.in instead.": "हमारी ओर से समस्या के कारण प्रतिपुष्टि सहेजी नहीं जा सकी। कृपया fsez@nic.in पर ईमेल करें।",
      "Error:": "त्रुटि:",
      "FSEZ": "एफएसईजेड",
      "At A Glance": "एक दृष्टि में",
      "The Zonal Office of Development Commissioner, Falta SEZ has jurisdiction over the 12 (twelve) states of West Bengal, Odisha, Jharkhand, Bihar, Meghalaya, Tripura, Assam, Mizoram, Nagaland, Arunachal Pradesh, Meghalaya, Sikkim.": "जोनल कार्यालय, विकास आयुक्त, फालता एसईजेड का क्षेत्राधिकार पश्चिम बंगाल, ओडिशा, झारखंड, बिहार, मेघालय, त्रिपुरा, असम, मिजोरम, नागालैंड, अरुणाचल प्रदेश, मेघालय और सिक्किम — इन 12 (बारह) राज्यों पर है।",
      "List Of SEZ under Zonal DC, Falta SEZ": "जोनल विकास आयुक्त, फालता एसईजेड के अधीन एसईजेड की सूची",
      "List of Special Economic Zones under the Zonal Development Commissioner, Falta SEZ, grouped by state": "फालता एसईजेड के जोनल विकास आयुक्त के अधीन विशेष आर्थिक क्षेत्रों की सूची, राज्य के अनुसार",
      "State": "राज्य",
      "Name of SEZ": "एसईजेड का नाम",
      "WEST BENGAL": "पश्चिम बंगाल",
      "JHARKHAND": "झारखंड",
      "ODISHA": "ओडिशा",
      "MANIPUR": "मणिपुर",
      "NAGALAND": "नागालैंड",
      "TRIPURA": "त्रिपुरा",
      "SIKKIM": "सिक्किम",
      "ARUNACHAL": "अरुणाचल",
      "BIHAR": "बिहार",
      "Falta SEZ": "फालता एसईजेड",
      "Manikanchan SEZ": "मणिकंचन एसईजेड",
      "Candor Kolkata One Hi-tech Structure Pvt Ltd SEZ": "कैंडर कोलकाता वन हाई-टेक स्ट्रक्चर प्राइवेट लिमिटेड एसईजेड",
      "DLF Ltd (IT/ITES SEZ)": "डीएलएफ लिमिटेड (आईटी/आईटीईएस एसईजेड)",
      "Tata Consultacy Services SEZ": "टाटा कंसल्टेंसी सर्विसेज एसईजेड",
      "Wipro SEZ": "विप्रो एसईजेड",
      "Kolkata IT Park SEZ": "कोलकाता आईटी पार्क एसईजेड",
      "Adani Power Ltd SEZ": "अदानी पावर लिमिटेड एसईजेड",
      "Vedanta Ltd SEZ": "वेदांता लिमिटेड एसईजेड",
      "Tata Steel SEZ": "टाटा स्टील एसईजेड",
      "Saraf Agencies Pvt Ltd SEZ": "सराफ एजेंसीज प्राइवेट लिमिटेड एसईजेड",
      "Orissa Industrial Infrastructure Development Corporation (IDCO) (IT/ITES SEZ)": "ओडिशा इंडस्ट्रियल इन्फ्रास्ट्रक्चर डेवलपमेंट कॉर्पोरेशन (आईडीसीओ) (आईटी/आईटीईएस एसईजेड)",
      "Orissa Industrial Infrastructure Development Corporation (IDCO) IT Knowledge Park": "ओडिशा इंडस्ट्रियल इन्फ्रास्ट्रक्चर डेवलपमेंट कॉर्पोरेशन (आईडीसीओ) आईटी नॉलेज पार्क",
      "Heterogeneous Integration Packaging Solutions Private Limited SEZ": "हेटेरोजिनियस इंटीग्रेशन पैकेजिंग सॉल्यूशंस प्राइवेट लिमिटेड एसईजेड",
      "Manipur IT SEZ Project Development Company Ltd.": "मणिपुर आईटी एसईजेड प्रोजेक्ट डेवलपमेंट कंपनी लिमिटेड",
      "Nagaland Industrial Development Corporation Limited": "नागालैंड इंडस्ट्रियल डेवलपमेंट कॉर्पोरेशन लिमिटेड",
      "Tripura Industrial Development Corporation Limited": "त्रिपुरा इंडस्ट्रियल डेवलपमेंट कॉर्पोरेशन लिमिटेड",
      "Department of Information Technology, Sikkim": "सूचना प्रौद्योगिकी विभाग, सिक्किम",
      "Department of Trade and Commerce, Arunachal Pradesh": "व्यापार एवं वाणिज्य विभाग, अरुणाचल प्रदेश",
      "Nawanagar, Buxar, Multi- Sector SEZ": "नवानगर, बक्सर, मल्टी-सेक्टर एसईजेड",
      "Kumarbagh, West Champaran, Multi- SEZ": "कुमारबाग, पश्चिम चंपारण, मल्टी-एसईजेड"
    },
    bn: {
      "Skip to main content": "মূল বিষয়বস্তুতে যান",
      "Screen Reader Access": "স্ক্রিন রিডার অ্যাক্সেস",
      "Help": "সহায়তা",
      "Text size": "অক্ষরের আকার",
      "High Contrast": "উচ্চ কনট্রাস্ট",
      "Normal Contrast": "সাধারণ কনট্রাস্ট",
      "Select Language": "ভাষা নির্বাচন করুন",
      "Search": "খুঁজুন",
      "Search this website": "এই ওয়েবসাইটে খুঁজুন",
      "Government of India": "ভারত সরকার",
      "Office of the Development Commissioner": "উন্নয়ন কমিশনারের কার্যালয়",
      "Falta Special Economic Zone": "ফলতা বিশেষ অর্থনৈতিক অঞ্চল",
      "Ministry of Commerce & Industry | Department of Commerce": "বাণিজ্য ও শিল্প মন্ত্রক | বাণিজ্য বিভাগ",
      "Home": "হোম",
      "About": "পরিচিতি",
      "FSEZ at a Glance": "এক নজরে এফএসইজেড",
      "Jurisdiction": "এখতিয়ার",
      "Performance": "কর্মক্ষমতা",
      "Organisational Structure": "সাংগঠনিক কাঠামো",
      "How to Reach Falta SEZ": "ফলতা এসইজেডে কীভাবে পৌঁছাবেন",
      "How To Setup a SEZ": "এসইজেড কীভাবে স্থাপন করবেন",
      "How to Setup a Unit in SEZ": "এসইজেডে ইউনিট কীভাবে স্থাপন করবেন",
      "List of Units under FSEZ": "এফএসইজেডের ইউনিটের তালিকা",
      "List of EOUs under FSEZ": "এফএসইজেডের ইওইউ তালিকা",
      "Authority": "কর্তৃপক্ষ",
      "Constitution": "গঠন",
      "Infrastructure": "অবকাঠামো",
      "Tariff": "শুল্ক",
      "Authority Meeting": "কর্তৃপক্ষের সভা",
      "Authority Meeting Agenda": "কর্তৃপক্ষের সভার আলোচ্যসূচি",
      "Authority Meeting Minutes": "কর্তৃপক্ষের সভার কার্যবিবরণী",
      "Unit Rent Status": "ইউনিট ভাড়ার অবস্থা",
      "Annual Report": "বার্ষিক প্রতিবেদন",
      "Sample Lease Agreement": "নমুনা ইজারা চুক্তি",
      "Electricity Duty Exemption": "বিদ্যুৎ শুল্ক ছাড়",
      "UAC": "ইউএসি",
      "SEZ Meeting": "এসইজেড সভা",
      "UAC Meeting Agenda": "ইউএসি সভার আলোচ্যসূচি",
      "UAC Meeting Minutes": "ইউএসি সভার কার্যবিবরণী",
      "EOU Meeting": "ইওইউ সভা",
      "EOU Meeting Agenda": "ইওইউ সভার আলোচ্যসূচি",
      "EOU Meeting Minutes": "ইওইউ সভার কার্যবিবরণী",
      "DOC": "ডিওসি",
      "BOA": "বিওএ",
      "BOA Meeting Agenda": "বিওএ সভার আলোচ্যসূচি",
      "BOA Meeting Minutes": "বিওএ সভার কার্যবিবরণী",
      "Instructions": "নির্দেশাবলি",
      "Rules and Amendments": "নিয়ম ও সংশোধনী",
      "Other Info": "অন্যান্য তথ্য",
      "Other SEZs": "অন্যান্য এসইজেড",
      "Other Links & Policies": "অন্যান্য লিংক ও নীতি",
      "Forms": "ফর্ম",
      "SEZ Forms": "এসইজেড ফর্ম",
      "EOU Forms": "ইওইউ ফর্ম",
      "Quick Links": "দ্রুত লিংক",
      "SEZ Rules & Acts": "এসইজেড নিয়ম ও আইন",
      "Circulars & Policies": "পরিপত্র ও নীতি",
      "Tenders": "দরপত্র",
      "Vacancies": "শূন্যপদ",
      "CPGRAMS": "সিপিগ্রামস",
      "Media": "মিডিয়া",
      "Interview": "সাক্ষাৎকার",
      "Photo Gallery": "ছবির গ্যালারি",
      "Video Gallery": "ভিডিও গ্যালারি",
      "Public Notice": "জনবিজ্ঞপ্তি",
      "Achievements": "অর্জন",
      "RTI": "আরটিআই",
      "Point of Contact": "যোগাযোগের বিন্দু",
      "Transparency Audit": "স্বচ্ছতা নিরীক্ষা",
      "Contact": "যোগাযোগ",
      "Latest updates": "সর্বশেষ আপডেট",
      "Pause updates": "আপডেট থামান",
      "Play updates": "আপডেট চালান",
      "Pause slideshow": "স্লাইড শো থামান",
      "Play slideshow": "স্লাইড শো চালান",
      "Feedback": "মতামত",
      "Content owned, maintained and updated by the Office of the Development Commissioner, Falta Special Economic Zone, Department of Commerce, Ministry of Commerce and Industry, Government of India.": "এই বিষয়বস্তুর মালিকানা, রক্ষণাবেক্ষণ ও হালনাগাদ উন্নয়ন কমিশনারের কার্যালয়, ফলতা বিশেষ অর্থনৈতিক অঞ্চল, বাণিজ্য বিভাগ, বাণিজ্য ও শিল্প মন্ত্রক, ভারত সরকারের অধীনে।",
      "Designed, developed and hosted by": "নকশা, উন্নয়ন ও হোস্টিং",
      "Gatepass Portal": "গেটপাস পোর্টাল",
      "Pay Your Rent": "ভাড়া পরিশোধ করুন",
      "Unit - Sign Up": "ইউনিট - নিবন্ধন",
      "About Falta SEZ": "ফলতা এসইজেড সম্পর্কে",
      "FSEZ Links": "এফএসইজেড লিংক",
      "SEZ Online": "এসইজেড অনলাইন",
      "Contact Us": "যোগাযোগ করুন",
      "Policies": "নীতি",
      "FAQ": "সচরাচর জিজ্ঞাস্য",
      "Accessibility statement": "সুলভতা বিবৃতি",
      "Disclaimer": "দাবিত্যাগ",
      "Privacy Policy": "গোপনীয়তা নীতি",
      "Terms and Conditions": "শর্তাবলি",
      "Copyright Policy": "কপিরাইট নীতি",
      "Hyperlinking Policy": "হাইপারলিংক নীতি",
      "Sitemap": "সাইটম্যাপ",
      "Related links": "সম্পর্কিত লিংক",
      "National Portal of India": "ভারতের জাতীয় পোর্টাল",
      "Silpa Sathi Portal": "শিল্প সাথী পোর্টাল",
      "Vigilance": "সতর্কতা",
      "Right to Information": "তথ্যের অধিকার",
      "Contact us": "যোগাযোগ করুন",
      "Office of the Development Commissioner": "উন্নয়ন কমিশনারের কার্যালয়",
      "Follow us:": "আমাদের অনুসরণ করুন:",
      "Follow us": "আমাদের অনুসরণ করুন",
      "Facebook": "ফেসবুক",
      "Twitter": "টুইটার",
      "Phone:": "ফোন:",
      "Email:": "ইমেল:",
      "Welcome to Falta Special Economic Zone": "ফলতা বিশেষ অর্থনৈতিক অঞ্চলে স্বাগতম",
      "West Bengal, Sikkim and Andaman & Nicobar Islands": "পশ্চিমবঙ্গ, সিকিম এবং আন্দামান ও নিকোবর দ্বীপপুঞ্জ",
      "Circulars": "পরিপত্র",
      "Approval Committee agenda for SEZ units": "এসইজেড ইউনিটের অনুমোদন কমিটির আলোচ্যসূচি",
      "Online gate-pass application for the zone": "জোনের জন্য অনলাইন গেটপাস আবেদন",
      "Unit rent status and payment details": "ইউনিট ভাড়ার অবস্থা ও পরিশোধের বিবরণ",
      "Register a unit with Falta SEZ": "ফলতা এসইজেডে ইউনিট নিবন্ধন করুন",
      "Developer and unit monitoring system": "ডেভেলপার ও ইউনিট পরিবীক্ষণ ব্যবস্থা",
      "Departmental circulars and policies": "বিভাগীয় পরিপত্র ও নীতি",
      "Divisions": "বিভাগ",
      "Services": "সেবা",
      "Other links": "অন্যান্য লিংক",
      "Public notices": "জনবিজ্ঞপ্তি",
      "How to setup a unit": "ইউনিট কীভাবে স্থাপন করবেন",
      "FSEZ Authority": "এফএসইজেড কর্তৃপক্ষ",
      "Export Oriented Units": "রপ্তানিমুখী ইউনিট",
      "Welcome to": "স্বাগতম",
      "Campus view": "ক্যাম্পাস দৃশ্য",
      "A dedicated export manufacturing zone near Kolkata": "কলকাতার কাছে নিবেদিত রপ্তানি উৎপাদন অঞ্চল",
      "Serving units and developers": "ইউনিট ও ডেভেলপারদের সেবা",
      "Approvals, facilitation and estate services": "অনুমোদন, সহায়তা ও এস্টেট সেবা",
      "Ready industrial campus": "প্রস্তুত শিল্প ক্যাম্পাস",
      "Connected to Kolkata and Haldia ports": "কলকাতা ও হলদিয়া বন্দরের সঙ্গে সংযুক্ত",
      "Organisation": "সংগঠন",
      "Gatepass": "গেটপাস",
      "Unit Rent": "ইউনিট ভাড়া",
      "Identity Card": "পরিচয়পত্র",
      "About FSEZ": "এফএসইজেড সম্পর্কে",
      "Falta Special Economic Zone was set up by the Government of India in 1984 and now functions under the SEZ Act and Rules from 10 February 2006.": "ফলতা বিশেষ অর্থনৈতিক অঞ্চল ভারত সরকার ১৯৮৪ সালে স্থাপন করে এবং এটি ১০ ফেব্রুয়ারি ২০০৬ থেকে এসইজেড আইন ও নিয়মের অধীনে পরিচালিত হয়।",
      "Guidance for setting up a unit in Falta SEZ, including approvals, documentation and the letter of approval process.": "ফলতা এসইজেডে ইউনিট স্থাপনের নির্দেশিকা, যার মধ্যে অনুমোদন, নথিপত্র এবং অনুমোদনপত্রের প্রক্রিয়া রয়েছে।",
      "The Authority develops and maintains estate infrastructure and world-class facilities for units operating in the zone.": "কর্তৃপক্ষ অঞ্চলে কার্যরত ইউনিটের জন্য এস্টেট অবকাঠামো ও বিশ্বমানের সুবিধা গড়ে তোলে এবং রক্ষণাবেক্ষণ করে।",
      "The EOU scheme supports export manufacturing and services under the jurisdiction of the Development Commissioner.": "ইওইউ প্রকল্প উন্নয়ন কমিশনারের এখতিয়ারে রপ্তানি উৎপাদন ও সেবাকে সহায়তা করে।",
      "Agenda": "আলোচ্যসূচি",
      "Minutes": "কার্যবিবরণী",
      "Date of issue": "জারির তারিখ",
      "Download": "ডাউনলোড",
      "SL": "ক্রমিক",
      "PDF": "পিডিএফ",
      "Agendas of the Unit Approval Committee (UAC) for SEZ units under the Office of the Development Commissioner, Falta SEZ.": "ফলতা এসইজেড, উন্নয়ন কমিশনারের কার্যালয়ের অধীন এসইজেড ইউনিটের জন্য ইউনিট অনুমোদন কমিটির (ইউএসি) আলোচ্যসূচি।",
      "Minutes of the Unit Approval Committee (UAC) for SEZ units under the Office of the Development Commissioner, Falta SEZ.": "ফলতা এসইজেড, উন্নয়ন কমিশনারের কার্যালয়ের অধীন এসইজেড ইউনিটের জন্য ইউনিট অনুমোদন কমিটির (ইউএসি) কার্যবিবরণী।",
      "No UAC meeting agenda is available at present.": "বর্তমানে কোনো ইউএসি সভার আলোচ্যসূচি নেই।",
      "No UAC meeting minutes are available at present.": "বর্তমানে কোনো ইউএসি সভার কার্যবিবরণী নেই।",
      "S. No.": "ক্র.নং",
      "Serial number": "ক্রমিক সংখ্যা",
      "Title of document": "নথির শিরোনাম",
      "Download (format and size)": "ডাউনলোড (ফরম্যাট ও আকার)",
      "Not available": "উপলব্ধ নয়",
      "List of UAC meeting agenda documents": "ইউএসি সভার আলোচ্যসূচি নথির তালিকা",
      "List of UAC meeting minutes documents": "ইউএসি সভার কার্যবিবরণী নথির তালিকা",
      "The table can be scrolled horizontally on a smaller screen.": "ছোট পর্দায় সারণিটি অনুভূমিকভাবে স্ক্রল করা যায়।",
      "(opens in a new window)": "(নতুন উইন্ডোতে খোলে)",
      "(opens an external website in a new window)": "(বহিরাগত ওয়েবসাইট নতুন উইন্ডোতে খোলে)",
      "(current page)": "(বর্তমান পৃষ্ঠা)",
      "Circular / Policy Name": "পরিপত্র / নীতির নাম",
      "List of circulars and policies": "পরিপত্র ও নীতির তালিকা",
      "No circular is available at present.": "বর্তমানে কোনো পরিপত্র নেই।",
      "Go to Archive": "আর্কাইভে যান",
      "Circulars issued by the Office of the Development Commissioner, Falta SEZ, in the last 12 months. Policies issued by DGFT and the Department of Commerce are listed under": "উন্নয়ন কমিশনারের কার্যালয়, ফলতা এসইজেড কর্তৃক গত ১২ মাসে জারি করা পরিপত্র। ডিজিএফটি ও বাণিজ্য বিভাগের নীতি এখানে তালিকাভুক্ত",
      "Archive": "আর্কাইভ",
      "Tender / Notice": "দরপত্র / বিজ্ঞপ্তি",
      "Vacancy notification": "শূন্যপদের বিজ্ঞপ্তি",
      "Forms / Notices / Instructions": "ফর্ম / বিজ্ঞপ্তি / নির্দেশাবলি",
      "Forms & Notices": "ফর্ম ও বিজ্ঞপ্তি",
      "List of tenders and notices": "দরপত্র ও বিজ্ঞপ্তির তালিকা",
      "List of vacancy notifications": "শূন্যপদের বিজ্ঞপ্তির তালিকা",
      "List of forms, notices and instructions": "ফর্ম, বিজ্ঞপ্তি ও নির্দেশাবলির তালিকা",
      "List of EOU meeting agenda documents": "ইওইউ সভার আলোচ্যসূচি নথির তালিকা",
      "List of EOU meeting minutes documents": "ইওইউ সভার কার্যবিবরণী নথির তালিকা",
      "List of authority meeting agenda documents": "কর্তৃপক্ষের সভার আলোচ্যসূচি নথির তালিকা",
      "List of authority meeting minutes documents": "কর্তৃপক্ষের সভার কার্যবিবরণী নথির তালিকা",
      "No tender is available at present.": "বর্তমানে কোনো দরপত্র নেই।",
      "No vacancy is available at present.": "বর্তমানে কোনো শূন্যপদ নেই।",
      "No form or notice is available at present.": "বর্তমানে কোনো ফর্ম বা বিজ্ঞপ্তি নেই।",
      "No EOU meeting agenda is available at present.": "বর্তমানে কোনো ইওইউ সভার আলোচ্যসূচি নেই।",
      "No EOU meeting minutes are available at present.": "বর্তমানে কোনো ইওইউ সভার কার্যবিবরণী নেই।",
      "No authority meeting agenda is available at present.": "বর্তমানে কোনো কর্তৃপক্ষের সভার আলোচ্যসূচি নেই।",
      "No authority meeting minutes are available at present.": "বর্তমানে কোনো কর্তৃপক্ষের সভার কার্যবিবরণী নেই।",
      "Form / Application / Annexure": "ফর্ম / আবেদন / সংযোজনী",
      "Instruction": "নির্দেশ",
      "Particulars": "বিবরণ",
      "Department of Commerce": "বাণিজ্য বিভাগ",
      "List of SEZ forms and applications": "এসইজেড ফর্ম ও আবেদনের তালিকা",
      "List of EOU forms and applications": "ইওইউ ফর্ম ও আবেদনের তালিকা",
      "List of Department of Commerce instructions": "বাণিজ্য বিভাগের নির্দেশের তালিকা",
      "List of FSEZ agenda documents": "এফএসইজেড আলোচ্যসূচি নথির তালিকা",
      "No SEZ form is available at present.": "বর্তমানে কোনো এসইজেড ফর্ম নেই।",
      "No EOU form is available at present.": "বর্তমানে কোনো ইওইউ ফর্ম নেই।",
      "No instruction is available at present.": "বর্তমানে কোনো নির্দেশ নেই।",
      "No agenda is available at present.": "বর্তমানে কোনো আলোচ্যসূচি নেই।",
      "Screen Reader": "স্ক্রিন রিডার",
      "Screen readers let people with visual impairments use this website with assistive technology. The site can be used with screen readers such as JAWS, NVDA, SAFA, Supernova and Window-Eyes.": "স্ক্রিন রিডার দৃষ্টিপ্রতিবন্ধী ব্যক্তিদের সহায়ক প্রযুক্তির মাধ্যমে এই ওয়েবসাইট ব্যবহার করতে দেয়। সাইটটি JAWS, NVDA, SAFA, Supernova এবং Window-Eyes-এর মতো স্ক্রিন রিডারের সঙ্গে ব্যবহার করা যায়।",
      "The table below lists information about different screen readers": "নিচের সারণিতে বিভিন্ন স্ক্রিন রিডারের তথ্য দেওয়া আছে",
      "List of screen readers with their websites and whether they are free or commercial": "স্ক্রিন রিডারের তালিকা, তাদের ওয়েবসাইট এবং সেগুলো বিনামূল্যে না বাণিজ্যিক",
      "Website": "ওয়েবসাইট",
      "Free / Commercial": "বিনামূল্যে / বাণিজ্যিক",
      "Free": "বিনামূল্যে",
      "Commercial": "বাণিজ্যিক",
      "Website Help": "ওয়েবসাইট সহায়তা",
      "How to use this website": "এই ওয়েবসাইট কীভাবে ব্যবহার করবেন",
      "This website follows the Guidelines for Indian Government Websites (GIGW 3.0) and Web Content Accessibility Guidelines (WCAG 2.1 Level AA).": "এই ওয়েবসাইট ভারতীয় সরকারি ওয়েবসাইটের নির্দেশিকা (GIGW 3.0) এবং ওয়েব কনটেন্ট অ্যাক্সেসিবিলিটি নির্দেশিকা (WCAG 2.1 লেভেল AA) মেনে চলে।",
      "Press Tab on page load to reach the “Skip to main content” link. Activate it to move past the header and menu.": "পৃষ্ঠা খুললে Tab চাপুন এবং “মূল বিষয়বস্তুতে যান” লিংকে পৌঁছান। এটি সক্রিয় করলে শীর্ষবার ও মেনু পেরিয়ে মূল অংশে যান।",
      "Use A-, A and A+ in the top bar to decrease, reset or increase text size. Your choice is saved in this browser.": "উপরের বারে A-, A এবং A+ দিয়ে অক্ষরের আকার কমান, রিসেট করুন বা বাড়ান। আপনার পছন্দ এই ব্রাউজারে সংরক্ষিত থাকে।",
      "Colour contrast": "রঙের কনট্রাস্ট",
      "Use High Contrast for yellow text on a black background. Choose Normal Contrast to return to the standard theme.": "কালো পটভূমিতে হলুদ পাঠের জন্য উচ্চ কনট্রাস্ট বেছে নিন। সাধারণ থিমে ফিরতে সাধারণ কনট্রাস্ট বেছে নিন।",
      "Language": "ভাষা",
      "Use the language selector in the top bar to choose English, Hindi or Bengali. The default language of this website is English. The Government of India identity is shown as Government of India | भारत सरकार.": "উপরের বারের ভাষা নির্বাচক থেকে ইংরেজি, হিন্দি বা বাংলা বেছে নিন। এই ওয়েবসাইটের মূল ভাষা ইংরেজি। ভারত সরকারের পরিচয় Government of India | भारत सरकार হিসেবে দেখানো হয়।",
      "Screen readers": "স্ক্রিন রিডার",
      "See the Screen Reader Access page for compatible assistive technologies such as NVDA and JAWS.": "NVDA ও JAWS-এর মতো সহায়ক প্রযুক্তির জন্য স্ক্রিন রিডার অ্যাক্সেস পৃষ্ঠা দেখুন।",
      "Use the search box next to the organisation identity to find news, tenders, circulars, vacancies and forms.": "সংস্থার নামের পাশের খোঁজ ঘর থেকে সংবাদ, দরপত্র, পরিপত্র, শূন্যপদ ও ফর্ম খুঁজুন।",
      "Documents": "নথি",
      "Downloadable files open in a new window. Titles indicate PDF or other formats where known.": "ডাউনলোড ফাইল নতুন উইন্ডোতে খোলে। যেখানে জানা আছে, শিরোনামে পিডিএফ বা অন্য ফরম্যাট লেখা থাকে।",
      "Need more help?": "আরও সাহায্য চাই?",
      "See Frequently Asked Questions or the Contact Us page.": "সচরাচর জিজ্ঞাস্য বা যোগাযোগ করুন পৃষ্ঠা দেখুন।",
      "Website Feedback": "ওয়েবসাইট মতামত",
      "Tell us what works and what does not on this website. We read every submission and reply to the email address you give us. For a formal grievance, please use the": "এই ওয়েবসাইটে কী কাজ করে এবং কী করে না তা জানান। আমরা প্রতিটি জমা পড়ি এবং আপনার দেওয়া ইমেলে উত্তর দিই। আনুষ্ঠানিক অভিযোগের জন্য অনুগ্রহ করে",
      "public grievance": "জনঅভিযোগ",
      "route instead.": "পথ ব্যবহার করুন।",
      "Fields marked": "চিহ্নিত ঘর",
      "are required.": "আবশ্যক।",
      "required": "আবশ্যক",
      "(required)": "(আবশ্যক)",
      "Your name": "আপনার নাম",
      "Email address": "ইমেল ঠিকানা",
      "We use this only to reply to your feedback.": "আমরা এটি শুধু আপনার মতামতের উত্তর দিতে ব্যবহার করি।",
      "Phone number (optional)": "ফোন নম্বর (ঐচ্ছিক)",
      "Your feedback": "আপনার মতামত",
      "Include the page name or address if your feedback is about a particular page.": "মতামত কোনো নির্দিষ্ট পাতা সম্পর্কে হলে পাতার নাম বা ঠিকানা লিখুন।",
      "Send feedback": "মতামত পাঠান",
      "Leave this field empty": "এই ঘর খালি রাখুন",
      "Thank you, your feedback has been received": "ধন্যবাদ, আপনার মতামত গৃহীত হয়েছে",
      "We have recorded your feedback and will reply to you by email if a response is needed. You can also reach the office on": "আমরা আপনার মতামত নথিভুক্ত করেছি এবং প্রয়োজনে ইমেলে উত্তর দেব। আপনি কার্যালয়ে এই নম্বরেও যোগাযোগ করতে পারেন",
      "There is a problem with this form": "এই ফর্মে সমস্যা আছে",
      "Enter your name, up to 120 characters.": "আপনার নাম লিখুন, সর্বোচ্চ ১২০ অক্ষর।",
      "Enter an email address in the format name@example.com so we can reply.": "উত্তরের জন্য name@example.com ফরম্যাটে ইমেল ঠিকানা লিখুন।",
      "Enter a phone number using digits, spaces, plus or hyphen only.": "ফোন নম্বর শুধু সংখ্যা, স্পেস, প্লাস বা হাইফেন দিয়ে লিখুন।",
      "Enter your feedback so we know what to act on.": "কী করতে হবে জানতে আপনার মতামত লিখুন।",
      "Shorten your feedback to 5000 characters or fewer.": "মতামত ৫০০০ অক্ষর বা তার কম করুন।",
      "We could not save your feedback because of a problem at our end. Please email fsez@nic.in instead.": "আমাদের দিকের সমস্যার জন্য মতামত সংরক্ষণ করা যায়নি। অনুগ্রহ করে fsez@nic.in-এ ইমেল করুন।",
      "Error:": "ত্রুটি:",
      "FSEZ": "এফএসইজেড",
      "At A Glance": "এক নজরে",
      "The Zonal Office of Development Commissioner, Falta SEZ has jurisdiction over the 12 (twelve) states of West Bengal, Odisha, Jharkhand, Bihar, Meghalaya, Tripura, Assam, Mizoram, Nagaland, Arunachal Pradesh, Meghalaya, Sikkim.": "জোনাল কার্যালয়, উন্নয়ন কমিশনার, ফলতা এসইজেড-এর এখতিয়ার পশ্চিমবঙ্গ, ওডিশা, ঝাড়খণ্ড, বিহার, মেঘালয়, ত্রিপুরা, আসাম, মিজোরাম, নাগাল্যান্ড, অরুণাচল প্রদেশ, মেঘালয় ও সিক্কিম — এই ১২ (বারো) রাজ্যের উপর রয়েছে।",
      "List Of SEZ under Zonal DC, Falta SEZ": "জোনাল উন্নয়ন কমিশনার, ফলতা এসইজেড-এর অধীন এসইজেডের তালিকা",
      "List of Special Economic Zones under the Zonal Development Commissioner, Falta SEZ, grouped by state": "ফলতা এসইজেড-এর জোনাল উন্নয়ন কমিশনারের অধীন বিশেষ অর্থনৈতিক অঞ্চলগুলির তালিকা, রাজ্য অনুসারে",
      "State": "রাজ্য",
      "Name of SEZ": "এসইজেডের নাম",
      "WEST BENGAL": "পশ্চিমবঙ্গ",
      "JHARKHAND": "ঝাড়খণ্ড",
      "ODISHA": "ওডিশা",
      "MANIPUR": "মণিপুর",
      "NAGALAND": "নাগাল্যান্ড",
      "TRIPURA": "ত্রিপুরা",
      "SIKKIM": "সিক্কিম",
      "ARUNACHAL": "অরুণাচল",
      "BIHAR": "বিহার",
      "Falta SEZ": "ফলতা এসইজেড",
      "Manikanchan SEZ": "মণিকঞ্চন এসইজেড",
      "Candor Kolkata One Hi-tech Structure Pvt Ltd SEZ": "ক্যান্ডর কলকাতা ওয়ান হাই-টেক স্ট্রাকচার প্রাইভেট লিমিটেড এসইজেড",
      "DLF Ltd (IT/ITES SEZ)": "ডিএলএফ লিমিটেড (আইটি/আইটিইএস এসইজেড)",
      "Tata Consultacy Services SEZ": "টাটা কনসালটেন্সি সার্ভিসেস এসইজেড",
      "Wipro SEZ": "উইপ্রো এসইজেড",
      "Kolkata IT Park SEZ": "কলকাতা আইটি পার্ক এসইজেড",
      "Adani Power Ltd SEZ": "আদানি পাওয়ার লিমিটেড এসইজেড",
      "Vedanta Ltd SEZ": "ভেদান্ত লিমিটেড এসইজেড",
      "Tata Steel SEZ": "টাটা স্টিল এসইজেড",
      "Saraf Agencies Pvt Ltd SEZ": "সরাফ এজেন্সিজ প্রাইভেট লিমিটেড এসইজেড",
      "Orissa Industrial Infrastructure Development Corporation (IDCO) (IT/ITES SEZ)": "ওড়িশা ইন্ডাস্ট্রিয়াল ইনফ্রাস্ট্রাকচার ডেভেলপমেন্ট কর্পোরেশন (আইডিসিও) (আইটি/আইটিইএস এসইজেড)",
      "Orissa Industrial Infrastructure Development Corporation (IDCO) IT Knowledge Park": "ওড়িশা ইন্ডাস্ট্রিয়াল ইনফ্রাস্ট্রাকচার ডেভেলপমেন্ট কর্পোরেশন (আইডিসিও) আইটি নলেজ পার্ক",
      "Heterogeneous Integration Packaging Solutions Private Limited SEZ": "হেটেরোজিনিয়াস ইন্টিগ্রেশন প্যাকেজিং সলিউশনস প্রাইভেট লিমিটেড এসইজেড",
      "Manipur IT SEZ Project Development Company Ltd.": "মণিপুর আইটি এসইজেড প্রজেক্ট ডেভেলপমেন্ট কোম্পানি লিমিটেড",
      "Nagaland Industrial Development Corporation Limited": "নাগাল্যান্ড ইন্ডাস্ট্রিয়াল ডেভেলপমেন্ট কর্পোরেশন লিমিটেড",
      "Tripura Industrial Development Corporation Limited": "ত্রিপুরা ইন্ডাস্ট্রিয়াল ডেভেলপমেন্ট কর্পোরেশন লিমিটেড",
      "Department of Information Technology, Sikkim": "তথ্য প্রযুক্তি বিভাগ, সিক্কিম",
      "Department of Trade and Commerce, Arunachal Pradesh": "বাণিজ্য ও বাণিজ্যিক বিভাগ, অরুণাচল প্রদেশ",
      "Nawanagar, Buxar, Multi- Sector SEZ": "নবনগর, বক্সার, মাল্টি-সেক্টর এসইজেড",
      "Kumarbagh, West Champaran, Multi- SEZ": "কুমারবাগ, পশ্চিম চম্পারণ, মাল্টি-এসইজেড"
    }
  };

  function applyFont(size) {
    if (!zooms[size]) size = "normal";
    document.body.style.zoom = zooms[size];
    try { localStorage.setItem(FONT_KEY, size); } catch (e) {}
    var buttons = document.querySelectorAll("[data-gigw-font]");
    for (var i = 0; i < buttons.length; i++) {
      var action = buttons[i].getAttribute("data-gigw-font");
      var active = false;
      if (action === "decrease") active = size === "small";
      if (action === "normal") active = size === "normal";
      if (action === "increase") active = size === "large" || size === "xlarge";
      buttons[i].classList.toggle("is-active", active);
      buttons[i].setAttribute("aria-pressed", active ? "true" : "false");
    }
  }

  function currentFont() {
    try { return localStorage.getItem(FONT_KEY) || "normal"; } catch (e) { return "normal"; }
  }

  function applyContrast(on) {
    document.body.classList.toggle("gigw-contrast", !!on);
    var btn = document.getElementById("gigw-contrast");
    if (btn) {
      btn.setAttribute("aria-pressed", on ? "true" : "false");
      btn.textContent = on ? "Normal Contrast" : "High Contrast";
    }
    try { localStorage.setItem(CONTRAST_KEY, on ? "1" : "0"); } catch (e) {}
  }

  function currentLang() {
    try { return localStorage.getItem(LANG_KEY) || "en"; } catch (e) { return "en"; }
  }

  var extraI18n = { hi: {}, bn: {} };
  try {
    extraI18n.hi = JSON.parse(localStorage.getItem("fsez-gigw-i18n-hi") || "{}") || {};
    extraI18n.bn = JSON.parse(localStorage.getItem("fsez-gigw-i18n-bn") || "{}") || {};
  } catch (e) {}

  var translateQueue = 0;
  var fetchBusy = false;
  var ATTR_KEYS = ["title", "placeholder", "alt", "aria-label"];

  var i18nLc = { hi: {}, bn: {} };
  var langs = ["hi", "bn"];
  for (var li = 0; li < langs.length; li++) {
    var src = I18N[langs[li]] || {};
    var out = {};
    for (var key in src) {
      if (Object.prototype.hasOwnProperty.call(src, key)) {
        out[key.toLowerCase()] = src[key];
      }
    }
    i18nLc[langs[li]] = out;
  }

  var fetchTried = { hi: {}, bn: {} };

  function skipTranslateRoot(el) {
    if (!el || !el.closest) return true;
    return !!el.closest(".gigw-lang, .gigw-font-group, .notranslate");
  }

  function looksEnglish(text) {
    return /[A-Za-z]{2,}/.test(text || "");
  }

  function polishTranslation(lang, text) {
    if (!text || (lang !== "hi" && lang !== "bn")) return text;
    var rules = lang === "hi"
      ? [
          [/\bSEZs\b/g, "एसईजेड"],
          [/\bSEZ\b/g, "एसईजेड"],
          [/\bPvt\.?\s*Ltd\.?\b/gi, "प्राइवेट लिमिटेड"],
          [/\bPrivate Limited\b/gi, "प्राइवेट लिमिटेड"],
          [/\bLtd\.?\b/gi, "लिमिटेड"],
          [/\bLimited\b/gi, "लिमिटेड"],
          [/\bIT\/ITES\b/g, "आईटी/आईटीईएस"],
          [/\bITES\b/g, "आईटीईएस"]
        ]
      : [
          [/\bSEZs\b/g, "এসইজেড"],
          [/\bSEZ\b/g, "এসইজেড"],
          [/\bPvt\.?\s*Ltd\.?\b/gi, "প্রাইভেট লিমিটেড"],
          [/\bPrivate Limited\b/gi, "প্রাইভেট লিমিটেড"],
          [/\bLtd\.?\b/gi, "লিমিটেড"],
          [/\bLimited\b/gi, "লিমিটেড"],
          [/\bIT\/ITES\b/g, "আইটি/আইটিইএস"],
          [/\bITES\b/g, "আইটিইএস"]
        ];
    var out = text;
    for (var i = 0; i < rules.length; i++) {
      out = out.replace(rules[i][0], rules[i][1]);
    }
    return out;
  }

  function lookupTranslation(lang, trimmed) {
    if (!trimmed) return null;
    var hit = null;
    if (I18N[lang] && I18N[lang][trimmed]) hit = I18N[lang][trimmed];
    else if (extraI18n[lang] && extraI18n[lang][trimmed]) hit = extraI18n[lang][trimmed];
    else {
      var lower = trimmed.toLowerCase();
      if (i18nLc[lang] && i18nLc[lang][lower]) hit = i18nLc[lang][lower];
    }
    if (hit) return polishTranslation(lang, hit);
    if (trimmed.length > 400) {
      var parts = splitSentences(trimmed);
      if (parts.length > 1) {
        var joined = [];
        for (var p = 0; p < parts.length; p++) {
          var piece = lookupTranslation(lang, parts[p]);
          if (!piece) return null;
          joined.push(piece);
        }
        extraI18n[lang][trimmed] = joined.join(" ");
        return extraI18n[lang][trimmed];
      }
    }
    return null;
  }

  function shouldFetchTranslation(text) {
    if (!text || text.length < 2) return false;
    if (!looksEnglish(text)) return false;
    if (/^[\d\s.,:+\-/#*()]+$/.test(text)) return false;
    if (/https?:\/\//i.test(text)) return false;
    if (/@/.test(text) && /\./.test(text) && text.length < 80) return false;
    return true;
  }

  function splitSentences(text) {
    if (text.length <= 400) return [text];
    var parts = [];
    var re = /[^.!?।]+(?:[.!?।]+|$)\s*/g;
    var chunk = "";
    var m;
    while ((m = re.exec(text))) {
      if ((chunk + m[0]).length > 400 && chunk) {
        parts.push(chunk.replace(/\s+/g, " ").trim());
        chunk = m[0];
      } else {
        chunk += m[0];
      }
    }
    if (chunk.replace(/\s+/g, " ").trim()) parts.push(chunk.replace(/\s+/g, " ").trim());
    return parts.length ? parts : [text.slice(0, 400)];
  }

  function translateEndpoint() {
    var scripts = document.getElementsByTagName("script");
    for (var i = 0; i < scripts.length; i++) {
      var src = scripts[i].getAttribute("src") || "";
      if (/gigw\.js/.test(src)) {
        return src.replace(/js\/gigw\.js(\?.*)?$/, "ajax/translate.php");
      }
    }
    return "ajax/translate.php";
  }

  function postTranslate(lang, texts, done) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", translateEndpoint(), true);
    xhr.timeout = 28000;
    xhr.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
    xhr.onreadystatechange = function () {
      if (xhr.readyState !== 4) return;
      if (xhr.status < 200 || xhr.status >= 300) {
        done(null);
        return;
      }
      try {
        done(JSON.parse(xhr.responseText));
      } catch (e) {
        done(null);
      }
    };
    xhr.ontimeout = function () { done(null); };
    xhr.send(JSON.stringify({ lang: lang, texts: texts }));
  }

  function setLangStatus(message) {
    var el = document.getElementById("gigw-lang-status");
    if (el) el.textContent = message || "";
  }

  function collectTextNodes() {
    var nodes = [];
    var walker = document.createTreeWalker(document.body, NodeFilter.SHOW_TEXT, {
      acceptNode: function (node) {
        if (!node.nodeValue || !node.nodeValue.trim()) return NodeFilter.FILTER_REJECT;
        var parent = node.parentElement;
        if (!parent) return NodeFilter.FILTER_REJECT;
        var tag = parent.tagName;
        if (/^(SCRIPT|STYLE|NOSCRIPT|TEXTAREA|CODE|PRE|SELECT|OPTION)$/.test(tag)) {
          return NodeFilter.FILTER_REJECT;
        }
        if (skipTranslateRoot(parent)) return NodeFilter.FILTER_REJECT;
        return NodeFilter.FILTER_ACCEPT;
      }
    });
    while (walker.nextNode()) {
      var node = walker.currentNode;
      if (!node.gigwOrig) {
        if (currentLang() !== "en" && !looksEnglish(node.nodeValue)) continue;
        node.gigwOrig = node.nodeValue;
      }
      nodes.push(node);
    }
    return nodes;
  }

  function collectAttrTargets() {
    var out = [];
    var els = document.querySelectorAll("[title], [placeholder], [alt], [aria-label], input[type=submit], input[type=button], input[type=reset]");
    for (var i = 0; i < els.length; i++) {
      var el = els[i];
      if (skipTranslateRoot(el)) continue;
      if (!el.gigwOrigAttrs) el.gigwOrigAttrs = {};
      for (var a = 0; a < ATTR_KEYS.length; a++) {
        var name = ATTR_KEYS[a];
        if (!el.hasAttribute(name)) continue;
        if (el.gigwOrigAttrs[name] == null) {
          var current = el.getAttribute(name) || "";
          if (currentLang() !== "en" && !looksEnglish(current)) continue;
          el.gigwOrigAttrs[name] = current;
        }
        out.push({ el: el, attr: name });
      }
      if (/^INPUT$/i.test(el.tagName) && /^(submit|button|reset)$/i.test(el.type)) {
        if (el.gigwOrigAttrs.value == null) {
          if (currentLang() !== "en" && !looksEnglish(el.value || "")) continue;
          el.gigwOrigAttrs.value = el.value || "";
        }
        out.push({ el: el, attr: "value" });
      }
    }
    return out;
  }

  function wrapHit(original, hit) {
    var leading = (original.match(/^\s*/) || [""])[0];
    var trailing = (original.match(/\s*$/) || [""])[0];
    return leading + hit + trailing;
  }

  function enqueueMissing(trimmed, lang, missing, missingSeen) {
    if (!shouldFetchTranslation(trimmed)) return;
    if (lookupTranslation(lang, trimmed)) return;
    if (fetchTried[lang] && fetchTried[lang][trimmed]) return;
    var pieces = trimmed.length > 400 ? splitSentences(trimmed) : [trimmed];
    for (var i = 0; i < pieces.length; i++) {
      var bit = pieces[i];
      if (!shouldFetchTranslation(bit) || lookupTranslation(lang, bit)) continue;
      if (fetchTried[lang] && fetchTried[lang][bit]) continue;
      if (missingSeen[bit]) continue;
      missingSeen[bit] = true;
      missing.push(bit);
    }
  }

  function paintLanguage(lang) {
    var nodes = collectTextNodes();
    var missing = [];
    var missingSeen = {};
    for (var i = 0; i < nodes.length; i++) {
      var original = nodes[i].gigwOrig;
      var trimmed = original.replace(/\s+/g, " ").trim();
      if (lang === "en") {
        nodes[i].nodeValue = original;
        continue;
      }
      var hit = lookupTranslation(lang, trimmed);
      if (hit) {
        nodes[i].nodeValue = wrapHit(original, hit);
      } else {
        nodes[i].nodeValue = original;
        enqueueMissing(trimmed, lang, missing, missingSeen);
      }
    }
    var attrs = collectAttrTargets();
    for (var j = 0; j < attrs.length; j++) {
      var item = attrs[j];
      var orig = item.el.gigwOrigAttrs[item.attr] || "";
      var t = orig.replace(/\s+/g, " ").trim();
      if (lang === "en") {
        if (item.attr === "value") item.el.value = orig;
        else item.el.setAttribute(item.attr, orig);
        continue;
      }
      var ah = lookupTranslation(lang, t);
      if (ah) {
        if (item.attr === "value") item.el.value = wrapHit(orig, ah);
        else item.el.setAttribute(item.attr, wrapHit(orig, ah));
      } else {
        enqueueMissing(t, lang, missing, missingSeen);
      }
    }
    document.documentElement.lang = lang === "en" ? "en" : lang;
    return missing;
  }

  function applyLanguage(lang) {
    var select = document.getElementById("gigw-lang");
    if (select) select.value = lang;
    try { localStorage.setItem(LANG_KEY, lang); } catch (e) {}
    if (lang === "en") {
      translateQueue += 1;
      fetchBusy = false;
      paintLanguage("en");
      setLangStatus("");
      return;
    }
    var missing = paintLanguage(lang);
    if (missing.length) {
      fetchMissingTranslations(lang, missing);
    } else {
      setLangStatus("");
    }
  }

  function persistExtra(lang) {
    try {
      localStorage.setItem("fsez-gigw-i18n-" + lang, JSON.stringify(extraI18n[lang] || {}));
    } catch (e) {}
  }

  function fetchMissingTranslations(lang, missing) {
    if (!missing || !missing.length) return;
    translateQueue += 1;
    var job = translateQueue;
    fetchBusy = true;
    if (!fetchTried[lang]) fetchTried[lang] = {};
    setLangStatus(lang === "hi" ? "अनुवाद हो रहा है…" : "অনুবাদ চলছে…");
    var batches = [];
    for (var i = 0; i < missing.length; i += 5) {
      batches.push(missing.slice(i, i + 5));
    }
    function next(index, retried) {
      if (job !== translateQueue) return;
      if (index >= batches.length) {
        paintLanguage(lang);
        setLangStatus("");
        if (job === translateQueue) fetchBusy = false;
        return;
      }
      var batch = batches[index];
      postTranslate(lang, batch, function (data) {
        if (job !== translateQueue) return;
        if (data && data.status === "ok" && data.texts && data.texts.length === batch.length) {
          if (!extraI18n[lang]) extraI18n[lang] = {};
          for (var t = 0; t < batch.length; t++) {
            fetchTried[lang][batch[t]] = true;
            if (data.texts[t] && data.texts[t] !== batch[t]) {
              extraI18n[lang][batch[t]] = data.texts[t];
            }
          }
          persistExtra(lang);
          paintLanguage(lang);
          next(index + 1, false);
          return;
        }
        if (!retried) {
          next(index, true);
          return;
        }
        next(index + 1, false);
      });
    }
    next(0, false);
  }

  applyFont(currentFont());
  try { applyContrast(localStorage.getItem(CONTRAST_KEY) === "1"); } catch (e) {}

  document.addEventListener("click", function (e) {
    var fontBtn = e.target.closest("[data-gigw-font]");
    if (fontBtn) {
      e.preventDefault();
      var action = fontBtn.getAttribute("data-gigw-font");
      var idx = steps.indexOf(currentFont());
      if (idx < 0) idx = 1;
      if (action === "decrease") idx = Math.max(0, idx - 1);
      else if (action === "increase") idx = Math.min(steps.length - 1, idx + 1);
      else idx = 1;
      applyFont(steps[idx]);
    }
    if (e.target.closest("#gigw-contrast")) {
      applyContrast(!document.body.classList.contains("gigw-contrast"));
    }
    var pause = e.target.closest("[data-gigw-ticker]");
    if (pause) {
      var ticker = document.querySelector(".gigw-ticker");
      if (ticker) {
        var paused = ticker.classList.toggle("is-paused");
        pause.textContent = paused ? "Play updates" : "Pause updates";
        pause.setAttribute("aria-pressed", paused ? "true" : "false");
      }
    }
  });

  document.addEventListener("change", function (e) {
    if (e.target && e.target.id === "gigw-lang") {
      applyLanguage(e.target.value);
    }
  });

  // GIGW asks for a clear indication when a link opens a new window or leads
  // out to a non-government site. Doing it here covers every legacy page
  // without editing hundreds of anchors by hand.
  var GOV_HOST = /(^|\.)(gov\.in|nic\.in)$/i;

  function alreadyWarned(link) {
    if (link.classList.contains("gov-doc-link")) return true;
    if (link.querySelector(".sr-only")) return true;
    var title = (link.getAttribute("title") || "").toLowerCase();
    if (title.indexOf("new window") > -1 || title.indexOf("new tab") > -1 || title.indexOf("external") > -1) {
      return true;
    }
    return (link.textContent || "").toLowerCase().indexOf("new window") > -1;
  }

  function markNewWindowLinks() {
    var links = document.querySelectorAll('a[target="_blank"]');
    for (var i = 0; i < links.length; i++) {
      var link = links[i];
      if (!link.getAttribute("rel")) link.setAttribute("rel", "noopener noreferrer");
      if (alreadyWarned(link)) continue;
      var external = false;
      try {
        external = !!link.hostname && link.hostname !== location.hostname && !GOV_HOST.test(link.hostname);
      } catch (e) {}
      var note = document.createElement("span");
      note.className = "sr-only";
      note.textContent = external
        ? " (opens an external website in a new window)"
        : " (opens in a new window)";
      link.appendChild(note);
      link.classList.add(external ? "gigw-ext-link" : "gigw-new-window");
      if (!link.getAttribute("title")) {
        link.setAttribute("title", external ? "External website, opens in a new window" : "Opens in a new window");
      }
    }
  }

  function t(str) {
    var dict = I18N[currentLang()];
    if (dict && dict[str]) return dict[str];
    return str;
  }

  function setSliderPaused(slider, paused, retry) {
    slider.setAttribute("data-gigw-paused", paused ? "1" : "0");
    if (window.jQuery) {
      try {
        window.jQuery(slider).trigger(paused ? "stop.owl.autoplay" : "play.owl.autoplay");
      } catch (e) {}
    }
    if (retry !== false) {
      window.setTimeout(function () {
        setSliderPaused(slider, paused, false);
      }, 1200);
    }
  }

  function paintPauseButton(btn, paused) {
    var label = t(paused ? "Play slideshow" : "Pause slideshow");
    btn.setAttribute("aria-pressed", paused ? "true" : "false");
    btn.setAttribute("title", label);
    btn.innerHTML =
      '<span aria-hidden="true">' +
      (paused ? "\u25B6" : "\u23F8") +
      '</span><span class="sr-only">' +
      label +
      "</span>";
  }

  function addSliderControls() {
    var sliders = document.querySelectorAll(".hero-slider, .partner-slider");
    for (var i = 0; i < sliders.length; i++) {
      (function (slider) {
        if (slider.getAttribute("data-gigw-pause") === "1") return;
        slider.setAttribute("data-gigw-pause", "1");
        var btn = document.createElement("button");
        btn.type = "button";
        btn.className = "gigw-slider-pause";
        paintPauseButton(btn, false);
        btn.addEventListener("click", function () {
          var next = slider.getAttribute("data-gigw-paused") !== "1";
          setSliderPaused(slider, next);
          paintPauseButton(btn, next);
        });
        slider.parentNode.insertBefore(btn, slider);
        if (window.matchMedia && window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
          setSliderPaused(slider, true);
          paintPauseButton(btn, true);
        }
      })(sliders[i]);
    }
  }

  function bindTabs() {
    var roots = document.querySelectorAll("[data-fsez-tabs]");
    for (var r = 0; r < roots.length; r++) {
      (function (root) {
        var tabs = root.querySelectorAll('[role="tab"]');
        var panels = root.querySelectorAll('[role="tabpanel"]');
        var heading = root.parentNode.querySelector(".fsez-section-head h2");
        function activate(selected) {
          for (var t = 0; t < tabs.length; t++) {
            tabs[t].setAttribute("aria-selected", tabs[t] === selected ? "true" : "false");
          }
          for (var p = 0; p < panels.length; p++) {
            var show = panels[p].id === selected.getAttribute("aria-controls");
            panels[p].hidden = !show;
          }
          if (heading) heading.textContent = selected.textContent.replace(/\s+/g, " ").trim();
        }
        for (var i = 0; i < tabs.length; i++) {
          tabs[i].addEventListener("click", function () {
            activate(this);
          });
        }
      })(roots[r]);
    }
  }

  function start() {
    applyFont(currentFont());
    bindTabs();
    markNewWindowLinks();
    addSliderControls();
    var langSelect = document.getElementById("gigw-lang");
    var saved = currentLang();
    if (langSelect) langSelect.value = saved;
    if (saved !== "en") applyLanguage(saved);
    window.setTimeout(function () {
      var lang = currentLang();
      if (lang === "en") return;
      var extra = paintLanguage(lang);
      if (extra.length && !fetchBusy) fetchMissingTranslations(lang, extra);
    }, 1200);
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", start);
  } else {
    start();
  }
})();
