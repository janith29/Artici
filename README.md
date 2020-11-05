# 2020-051

**Main Objective**

To propose a system that increases the efficiency of the blood bank management system.

**Main Research Questions**

A blood bank is a very important organization in any country. Maintaining enough blood in the bank, organizing blood donation campaigns, matching the suitable donor for blood transfusions and securing blood distribution processes are some of the main functions handled by the blood bank. Generally, the doctors at the blood bank have an idea of how much blood they need for a given period of the year. However, there is no systematic way to predict the requirement. And, when there is a scarcity of blood in a particular area, there is no systematic way to predict such situations. Even though there might be several donors matching with recipient blood type and all medical requirements, we must consider several factors when selecting the best donor such as distance between donor and recipient, the last time of donation, age, blood group. Sometimes there might be a requirement where we need to maintain the privacy of blood distribution process, and currently, there are no security measurements taken. Furthermore, when organizing a blood camp, it is very difficult to select a suitable area for the campaigns due to transportation difficulty, lack of donors.

According to the research gap, it was discovered that these research questions will cover the entire scope of the proposed system.

* How to predict future blood demand?
* How to organize blood donation campaigns in an effective manner?
* How to find and notify the most appropriate blood donors in a critical situation?
* How to Secure the blood distribution process?

**Individual Research Questions**

    1. Predict the blood demand for the future


Usage of Blood in the medical sector is growing day by day regressively. To match the blood demand to be requested in the future planning it plays a vital role. To obtain optimal planning, authorities have focused on forecasting using the available historical data over the past 10 years. Although those data can be modelled to predict the future demand it’s clear that Blood bank never expected today’s requirement 10 years ago. Therefore, using old techniques to predict future needs is not fruitful. Data which are older than 10 years are mainly recorded in the manual state which creates a huge problem to digitize them as some values are missing.

Compared to the industrialization of the today’s world people face for many side effects. As a result, people may face accidents, wars and various diseases etc. In these cases, patients required to receive blood transfusions during medical treatments. Blood transfusion must be managed properly because of the importance of blood to a human body. So, if the management authority knows how much blood you need to collect in advance it will be a huge step for the authority. However, today’s blood centers operate on Microsoft excel sheets that include data about the collection of blood and the storage. This is somewhat a manual process which will waste time and money. 

This process is not a good method to collect the blood as well as to keep for the storage details. So, it is impossible to manage blood properly in the blood centers. Blood preservation can be as short as 35 days. So, if you collect more blood by not considering the actual demand this valuable blood may be a loss. Similarly, although if the demand is increasing blood centers required to provide the blood as per the requirements. Blood banks need to full fill these requirements in order to provide the best service for the public community as well as the health sector.
Typically, the amount of blood required for a hospital each year varies from month to month. Therefore, blood campaigners cannot say for certain that a certain amount of blood will be donated to the bank these months. Also, there are different types of blood groups. Different blood types are required from month to month. To complete the unbearable blood requirement authorities have focused on more forecasting, which can predict the amount of blood required for the future.   

    2. Recommend location for future blood donation campaigns using GIS 

Compared to the past people are more prone to illnesses and accidents which leads to people facing low blood levels. During such situations, a specific blood type should be taken from a party with a similar blood type. The blood bank stores blood for that purpose. Currently, blood donation campaigns are being organized by various organizations for this type of blood collection.
Generally, blood donation campaigns are organized in different areas in the division. There may have been two campaigns simultaneously. In this case, one campaign may experience an exceeding amount of the donors while the other campaign experience a low number rate of donors from that relevant area. The campaign, which was attended by a small number of donors will find it difficult as the organizing committee is unable to reach their blood-gathering target. As a result, a stable solution has not yet been proposed to the organizers of any blood donation campaigns.

    3. Finding the best donor for the blood transfusion

Currently, in the world, there are significant dead happened because of lack of blood in the blood bank. Every two seconds, someone in the U.S. needs blood, and more than 50,000 units of blood are needed each year at Cedars-Sinai alone. More than 38,000 blood donations are needed every day in America. 4.5 million Americans would die each year without life-saving blood transfusions. In the case of emergency, such as accident, natural disasters, bomb blast there could be a lot of patients who need blood. This could occur even at emergency surgeries. If patients need blood, and the blood classification is lost in the blood donation centre, the blood donation centre does not currently have an easy-to-find method.
Currently, the blood donation centre has no method to find the best donors. In an emergency situation, the blood donation centre has to publish the situation through society and inform about it to the people. Then donors can come to the blood donation centre and donate blood. It might take a lot of time and the patients might be affected by that.
As a solution for this, the AIMA system has to cover the requirements of finding the best donors to inform them and getting their response.The relevant data set is processed by using the data engineering recommendation algorithm and best suitable results are selected. After that, the relevant donors will be informed using Twilio communication API. 

    4. Secure the blood supply chain

Blood transfusion form is a form that is used, when the blood is to be collected from a particular donor to the patient. Fake blood transfusion forms are everywhere in the world which causes deception of blood. They are illegal and cause harm to the reputations. There are fake blood banks providing these services and also illegal doctors pretending to be legal to give those kinds of forms for money. This is the worst case in India and Middle East countries.

The blood distribution process happens in an unarranged manner. Also, the blood transactions between blood and the hospital are not much secured. Because of the blood deceptions done by unauthorized people .those can steal the blood packets and use them for selling in the markets for a high price. As blood has a really high cost and value in other countries. Due to that, there is a high tendency in receiving blood in an inappropriate manner by filling fake details of patients and requesting from the blood bank. Donors donate blood for a cost unlike in Sri Lanka. 

Also, when they receive blood by these fake methods they sell these blood packets for money in illegal markets. For example Illegal market for blood in INDIA, India's lack of a central blood collection agency, along with taboos against exchanging blood with people of different castes, largely accounts for the shortage, experts say. It fuels a vast illegal market, despite a 1996 Supreme Court ruling that banned paid donors and unlicensed blood banks. Demand still outstrips supply. Private blood banks are legal as long as they obtain a government license for $120 (£80).

That is the purpose where blockchain-based our platform brings a solution for the above issues. In our proposed resolution, the transfusion forms are in digital format, at the same time it's secured by the security of blockchain implicitly. Therefore, the authenticity and integrity of the blood transfusion forms are never challenged.

**Individual Objectives**

    1. Predict the blood demand for the future

Indeed, the demand for blood is a major source of uncertainty, that’s why it is fundamental to understand past, present and future demand of a wide variety of blood product. Accordingly, managers should focus on the implementation of efficient techniques. This consist of forecasting in order to control shortage and availability of blood components, reduce wastage and product expiration, decrease blood inventory levels, and control other related costs.  Hence the importance of using accurate forecasting systems.

    2. Recommend location for future blood donation campaigns using GIS 

The organizers of Blood Donation Campaigns would be able to map out the most effective location for the next blood donation campaign. Organizers would be able to achieve a higher number of donors after developing the system.

    3. Finding the best donor for the blood transfusion

This research focuses on analysing and implementing a system to find the best blood donors in an emergency situation. Then inform them about the situation and get their response as soon as possible.

    4. Secure the blood supply chain

The main objective of this is to identify the problems in current physical transfusion form in the blood distribution process and identify how technologies and concepts can be used to overcome the problems. The blockchain concept is used as decentralized architecture to the blood transfusion form offering anonymity, longevity, integrity, transparency, and immutability to the information.


### Code Structure
Since the individual components have their own code structures in this GitLab Repository the system is categorized in
folders. The specification is given below.

| Folder Name | Author | Description |Technologies Used |
| ------ | ------ | ------ | ------ |
| IT16113664 | IT16113664 | | Flask, Jupyter Notebook, HTML, CSS ,Python ,SQL lite |
| IT17061780 | IT17061780 | | Flask, Jupyter Notebook, HTML, CSS ,Python ,SQL lite |
| IT17110280 | IT17110280 | | Flask, Jupyter Notebook, HTML, CSS ,Python ,SQL lite |
| IT17073974 | IT17073974 | | Flask, HTML, CSS ,Python |
| website/aima/blockchain | | NodeJs |
| website/aima/project | All Members | | Flask, Jupyter Notebook, HTML, CSS ,Python ,SQL lite |

### How to run the code?

The below table describes how to run separate backend applications individually.

| Folder Name | Author | Application | Steps |
| ------ | ------ | ------ | ------ |
| IT16113664 | IT16113664 | Flask API backend of Diabetes Prediction Model | Run the command 'flask app.py' |
| IT17061780 | IT17061780 | Flask API backend of Cardiovascular disease Prediction Model | Run the command 'flask app.py' |
| IT17110280 | IT17110280 | Flask APIs for Pre-processing and Post-processing | Run the command 'flask app.py'|
| IT17073974 | IT17073974 | Spring Boot backend of chat application and Flask backend of doctor suggestion system | Run the Command 'mvn spring-boot:run' to run spring boot application and run the command 'flask run' to run Flask application |
| website/aima/blockchain | |  |
| website/aima/project | |  |
