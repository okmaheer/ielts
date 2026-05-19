const TESTS_DATA = {
    general: [
        {
            id: "G1",
            title: "General Test 1",
            difficulty: "free",
            task1Type: "Letter",
            task1: "On a recent holiday, you lost a valuable item. Fortunately you have travel insurance to cover the cost of anything lost. Write a letter to the manager of your insurance company. In your letter (1) describe the item you lost (2) explain how you lost it (3) tell the insurance company what you would like them to do.",
            task2: "Some experts believe that it is better for children to begin learning a foreign language at primary school rather than secondary school. Do the advantages of this outweigh the disadvantages?."
        },
        {
            id: "G2",
            title: "General Test 2",
            difficulty: "free",
            task1Type: "Letter",
            task1: "You are working for a company. You need to take some time off work and want to ask your manager about this. Write a letter to your manager. In your letter (1) explain why you want to take time off work (2) give details of the amount of time you need (3) suggest how your work could be covered while you are away",
            task2: "Some people believe that unpaid community service should be a compulsory part of high school programmes (for example, working for a charity, improving the neighbourhood, or teaching sports to younger children). To what extent do you agree or disagree?"
        },
        {
            id: "G3",
            title: "General Test 3",
            difficulty: "free",
            task1Type: "Letter",
            task1: "People in your area are having problems with their internet connection. Write a letter to the company that provides the connection. In your letter (1) describe the problems (2) explain how they are affecting people (3) say what the company should do to help",
            task2: "Some people say that the best way to improve public health is by increasing the number of sports facilities. Others, however, say that this would have little effect on public health and that other measures are required. Discuss both views and give your opinion."
        },
        {
            id: "G4",
            title: "General Test 4",
            difficulty: "free",
            task1Type: "Letter",
            task1: "You have recently gone to live in a new city. Write a letter to your English-speaking friend. In your letter (1) explain why you have gone to live in the city (2) describe the place where you are living (3) invite your friend to come and see you",
            task2: "Every year, several languages die out. Some people think that this is not important because life will be easier if there are fewer languages in the world. To what extent do you agree or disagree with this opinion?."
        },
        {
            id: "G5",
            title: "General Test 5",
            difficulty: "paid",
            task1Type: "Letter",
            task1: "You recently received a letter from a friend asking for advice about whether to go to college or to try to get a job. You think he/she should get a job. Write a letter to this friend. In your letter (1) say why he/she would not enjoy going to college explain (2) why getting a job is a good idea for him/her (3) suggest types of job that would be suitable for him/her.",
            task2: "Employers sometimes ask people applying for jobs for personal information, such as their hobbies and interests, and whether they are married or single. Some people say that this information may be relevant and useful. Others disagree. Discuss both views and give your opinion."
        },
        {
            id: "G6",
            title: "General Test 6",
            difficulty: "paid",
            task1Type: "Letter",
            task1: "You recently attended a meeting at a hotel. When you returned home, you found you had left some important papers at the hotel. Write a letter to the manager of the hotel. In your letter (1) say where you think you left the papers (2) explain why they are so important (3) tell the manager what you want him/her to do",
            task2: "Some people say that in all levels of education, from primary schools to universities, too much time is spent on learning facts and not enough on learning practical skills. Do you agree or disagree?"
        },
        {
            id: "G7",
            title: "General Test 7",
            difficulty: "paid",
            task1Type: "Letter",
            task1: "Your local council is considering closing a sports and leisure centre that it runs, in order to save money. Write a letter to the local council. In your letter (1) give details of how you and your friends or family use the centre (2) explain why the sports and leisure centre is important for the local community (3) describe the possible effects on local people if the centre closes",
            task2: "News stories on TV and in newspapers are very often accompanied by pictures. Some people say that these pictures are more effective than words. What is your opinion about this?"
        },
        {
            id: "G8",
            title: "General Test 8",
            difficulty: "paid",
            task1Type: "Letter",
            task1: "You work for an international company. You have seen an advertisement for a training course which will be useful for your job. Write a letter to your manager. In your letter (1) describe the training course you want to do (2) explain what the company could do to help you (3) say how the course will be useful for your job",
            task2: "Some people say that it is possible to tell a lot about a person's culture and character from their choice of clothes. Do you agree or disagree?"
        }
    ],
    academic: [
        {
            id: "A1",
            title: "Academic Test 1",
            difficulty: "free",
            task1Type: "Task 1",
            task1: "The two maps below show an Island, before and after the construction of some tourist facilities. Summarise the information by selecting and reporting the main features, and make comparisons where relevant.",
            task2: "Some experts believe that it is better for children to begin learning a foreign language at primary school rather than secondary school. Do the advantages of this outweigh the disadvantages?"
        },
        {
            id: "A2",
            title: "Academic Test 2",
            difficulty: "free",
            task1Type: "Task 1",
            task1: "The chart below shows the total number of minutes (in billions) of telephone calls in the UK, divided into three categories, from 1995-2002. Summarise the information by selecting and reporting the main features, and make comparisons where relevant.",
            task2: "Some people believe that unpaid community service should be a compulsory part of high school programmes (for example, working for a charity, improving the neighbourhood, or teaching sports to younger children). To what extent do you agree or disagree?"
        },
        {
            id: "A3",
            title: "Academic Test 3",
            difficulty: "free",
            task1Type: "Task 1",
            task1: "The charts below give information on the ages of the populations of Yemen and Italy in 2000 and projections for 2050. Summarise the information by selecting and reporting the main features, and make comparisons where relevant.",
            task2: "Some people say that the best way to improve public health is by increasing the number of sports facilities. Others, however, say that this would have little effect on public health and that other measures are required. Discuss both views and give your opinion."
        },
        {
            id: "A4",
            title: "Academic Test 4",
            difficulty: "free",
            task1Type: "Task 1",
            task1: "The graph below gives information from a 2008 report about the consumption of energy in the USA since 1980, with projections until 2030. Summarise the information by selecting and reporting the main features, and make comparisons where relevant.",
            task2: "Every year, several languages die out. Some people think that this is not important because life will be easier if there are fewer languages in the world. To what extent do you agree or disagree with this opinion?"
        },
        {
            id: "A5",
            title: "Academic Test 5",
            difficulty: "paid",
            task1Type: "Task 1",
            task1: "The charts below show the percentage of water used for different purposes in six areas of the world. Summarise the information by selecting and reporting the main features, and make comparisons where relevant.",
            task2: "Governments should spend money on railways rather than roads. To what extent do you agree or disagree?"
        },
        {
            id: "A6",
            title: "Academic Test 6",
            difficulty: "paid",
            task1Type: "Task 1",
            task1: "The charts below show the proportions of British students at one university in England who were able to speak other languages in addition to English, in 2000 and 2010. Summarise the information by selecting and reporting the main features, and make comparisons where relevant.",
            task2: "Some people claim that enough of the waste from homes is recycled. They say that the only way to increase recycling is for governments to make it a legal requirement. To what extent do you think laws are needed to make people recycle more of their waste?"
        }
    ]
};

const TIPS_DATA = [
    {
        icon: '<path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>',
        title: "Manage your time",
        text: "Spend 20 minutes on Task 1 and 40 minutes on Task 2. Task 2 carries more marks — don't over-invest in Task 1."
    },
    {
        icon: '<path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>',
        title: "Plan before you write",
        text: "Take 2–3 minutes to plan your ideas. A structured outline leads to higher Coherence & Cohesion scores."
    },
    {
        icon: '<path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>',
        title: "Address all parts",
        text: "Read the prompt carefully. Missing any bullet point directly reduces your Task Achievement score."
    },
    {
        icon: '<path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>',
        title: "Review your answer",
        text: "Leave 3–5 minutes to proofread. Fix spelling errors and grammatical slips that could cost you Lexical Resource points."
    }
];
