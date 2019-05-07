<?php

use Illuminate\Database\Seeder;

class ReadingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //first readings
        DB::table('readings')->insert([
            'Option' => 'B-1',
            'Type' => 'FIRST READING',
            'Title' => 'Male and female he created them.',
            'BibleVerse' => 'Genesis 1:26-28, 31a',
            'Text' => 'A Reading from the Book of Genesis
            Then God said:
            “Let us make man in our image, after our likeness.
            Let them have dominion over the fish of the sea,
             the birds of the air, and the cattle,
             and over all the wild animals
            and all the creatures that crawl on the ground.”
            God created man in his image;
            in the image of God he created him;
            male and female he created them.
            God blessed them, saying:
            “Be fertile and multiply;
            fill the earth and subdue it.
            Have dominion over the fish of the sea, the birds of the air,
            and all the living things that move on the earth.”
            God looked at everything he had made, and he found it very good.
            The word of the Lord.',

        ]);

        DB::table('readings')->insert([
            'Option' => 'B-2',
            'Type' => 'FIRST READING',
            'Title' => 'The two of them become one body.',
            'BibleVerse' => 'Genesis 2:18-24',
            'Text' => 'A Reading from the Book of Genesis
            The Lord God said: “It is not good for the man to be alone.
            I will make a suitable partner for him.”
            So the Lord God formed out of the ground
             various wild animals and various birds of the air,
            and he brought them to the man to see what he would call them;
            whatever the man called each of them would be its name.
            The man gave names to all the cattle,
             all the birds of the air, and all the wild animals;
            but none proved to be the suitable partner for the man.
            So the Lord God cast a deep sleep on the man,
            and while he was asleep,
            he took out one of his ribs and closed up its place with flesh.
            The Lord God then built up into a woman the rib
            that he had taken from the man.
            When he brought her to the man, the man said:
            “This one, at last, is bone of my bones
             and flesh of my flesh;
            This one shall be called ‘woman,’
            for out of ‘her man’ this one has been taken.”
            That is why a man leaves his father and mother
             and clings to his wife,
            and the two of them become one body.
            The word of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'B-3',
            'Type' => 'FIRST READING',
            'Title' => 'In his love for Rebekah,
            Isaac found solace after the death of his mother.',
            'BibleVerse' => 'Genesis 24:48-51, 58-67',
            'Text' => 'A Reading from the Book of Genesis
            The servant of Abraham said to Laban:
            “I bowed down in worship to the Lord,
            blessing the Lord, the God of my master Abraham,
            who had led me on the right road
            to obtain the daughter of my master’s kinsman for his son.
            If, therefore, you have in mind
            to show true loyalty to my master, let me know;
            but if not, let me, know that, too.
            I can then proceed accordingly.”
            Laban and his household said in reply:
            “This thing comes from the Lord;
            we can say nothing to you either for or against it.
            Here is Rebekah, ready for you;
            take her with you,
            that she may become the wife of your master’s son,
            as the Lord has said.”
            So they called Rebekah and asked her,
            “Do you wish to go with this man?”
            She answered, “I do.”
            At this they allowed their sister Rebekah and her nurse
            to take leave, along with Abraham’s servant and his men.
            Invoking a blessing on Rebekah, they said:
            “Sister, may you grow
             into thousands of myriads;
            And may your descendants gain possession
             of the gates of their enemies!” 
            6
            Then Rebekah and her maids started out;
            they mounted their camels and followed the man.
            So the servant took Rebekah and went on his way.
            Meanwhile Isaac had gone from Beer-lahai-roi
            and was living in the region of the Negeb.
            One day toward evening he went out . . . in the field,
            and as he looked around, he noticed that camels were approaching.
            Rebekah, too, was looking about and when she saw him,
            she alighted from her camel and asked the servant,
            “Who is the man out there, walking through the fields toward us?”
            “That is my master,” replied the servant.
            Then she covered herself with her veil.
            The servant recounted to Isaac all the things he had done.
            Then Isaac took Rebekah into his tent;
            he married her, and thus she became his wife.
            In his love for her Isaac found solace
            after the death of his mother Sarah.
            The word of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'B-4',
            'Type' => 'FIRST READING',
            'Title' => 'May the Lord of heaven prosper you both.
            May he grant you mercy and peace.',
            'BibleVerse' => 'Tobit 7:6-14',
            'Text' => 'A Reading from the Book of Tobit
            Raphael and Tobiah entered the house of Raguel and greeted him. Raguel
            sprang up and kissed Tobiah, shedding tears of joy. But when he heard that
            Tobit had lost his eyesight, he was grieved and wept aloud. He said to Tobiah:
            "My child, God bless you! You are the son of a noble and good father. But
            what a terrible misfortune that such a righteous and charitable man should be
            afflicted with blindness!" He continued to weep in the arms of his kinsman
            Tobiah. His wife Edna also wept for Tobit; and even their daughter Sarah
            began to weep.
            Afterward, Raguel slaughtered a ram from the flock and gave them a cordial
            reception. When they had bathed and reclined to eat, Tobiah said to
            Raphael, "Brother Azariah, ask Raguel to let me marry my kinswoman
            Sarah." Raguel overheard the words; so he said to the boy: "Eat and drink
            and be merry tonight, for no man is more entitled to marry my daughter
            Sarah than you, brother. Besides, not even I have the right to give her to
            anyone but you, because you are my closest relative. But I will explain the
            situation to you very frankly. I have given her in marriage to seven men, all
            of whom were kinsmen of ours, and all died on the very night they
            approached her. But now, son, eat and drink. I am sure the Lord will look
            after you both." Tobiah answered, "I will eat or drink nothing until you set
            aside what belongs to me."
            Raguel said to him: "I will do it. She is yours according to the decree of the
            Book of Moses. Your marriage to her has been decided in heaven! Take
            your kinswoman; from now on you are her love, and she is your beloved.
            She is yours today and ever after. And tonight, son, may the Lord of heaven
            prosper you both. May he grant you mercy and peace." Then Raguel called
            his daughter Sarah, and she came to him. He took her by the hand and gave
            her to Tobiah with the words: "Take her according to the law. According to
            the decree written in the Book of Moses she is your wife. Take her and
            bring her back safely to your father. And may the God of heaven grant both
            of you peace and prosperity." 
            He then called her mother and told her to bring a scroll, so that he might
            draw up a marriage contract stating that he gave Sarah to Tobiah as his wife
            according to the decree of the Mosaic law. Her mother brought the scroll,
            and he drew up the contract, to which they affixed their seals.
            Afterward they began to eat and drink.
            The word of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'B-5',
            'Type' => 'FIRST READING',
            'Title' => 'Allow us to live together to a happy old age',
            'BibleVerse' => 'Tobit 8:4b-8',
            'Text' => 'A Reading from the Book of Tobit
            On their wedding night Tobiah arose from bed and said to his wife,
            "Sister, get up. Let us pray and beg our Lord
            to have mercy on us and to grant us deliverance."
            Sarah got up, and they started to pray
            and beg that deliverance might be theirs.
            They began with these words:
            "Blessed are you, O God of our fathers;
             praised be your name forever and ever.
            Let the heavens and all your creation
             praise you forever.
            You made Adam and you gave him his wife Eve
             to be his help and support;
             and from these two the human race descended.
            You said, "It is not good for the man to be alone;
             let us make him a partner like himself."
            Now, Lord, you know that I take this wife of mine
             not because of lust,
             but for a noble purpose.
            Call down your mercy on me and on her,
             and allow us to live together to a happy old age."
            
             They said together, "Amen, amen."
            The Word of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'B-6',
            'Type' => 'FIRST READING',
            'Title' => 'She who fears the Lord is to be praised.',
            'BibleVerse' => 'Proverbs 31:10-13, 19-20, 30-31',
            'Text' => 'A Reading from the Book of Proverbs
            When one finds a worthy wife,
            her value is far beyond pearls.
            Her husband, entrusting his heart to her,
            has an unfailing prize.
            She brings him good, and not evil,
            all the days of her life.
            She obtains wool and flax
            and makes cloth with skillful hands.
            She puts her hands to the distaff,
            and her fingers ply the spindle.
            She reaches out her hands to the poor,
            and extends her arms to the needy.
            Charm is deceptive and beauty fleeting;
            the woman who fears the Lord is to be praised.
            Give her a reward of her labors,
            and let her works praise her at the city gates.
            The word of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'B-7',
            'Type' => 'FIRST READING',
            'Title' => 'Stern as death is love.',
            'BibleVerse' => 'Song of Songs 2:8-10, 14, 16a; 8:6-7a',
            'Text' => 'A Reading from the Song of Songs
            Hark! My lover – here he comes
            springing across the mountains,
             leaping across the hills.
            My lover is like a gazelle
            or a young stag.
            Here he stands behind our wall,
             gazing through the windows,
            peering through the lattices.
            My lover speaks; he says to me,
            “Arise, my beloved, my dove, my beautiful one, and come!
            “O my dove in the clefts of the rock,
             in the secret recesses of the cliff,
            Let me see you,
            let me hear your voice,
            For your voice is sweet,
            and you are lovely.”
            My lover belongs to me and I to him.
            He says to me:
            “Set me as a seal on your heart,
             as a seal on your arm;
            For stern as death is love,
             relentless as the nether-world is devotion;
             its flames are a blazing fire.
            Deep waters cannot quench love,
            nor floods sweep it away.”
            The word of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'B-8',
            'Type' => 'FIRST READING',
            'Title' => 'Like the sun rising in the Lord’s heavens,
            the beauty of virtuous wife is the radiance of her home.',
            'BibleVerse' => 'Sirach 26:1-4, 13-16',
            'Text' => 'A Reading from the Book of Sirach
            Blessed the husband of a good wife,
             twice-lengthened are his days;
            A worthy wife brings joy to her husband,
             peaceful and full is his life.
            A good wife is a generous gift
             bestowed upon him who fears the Lord;
            Be he rich or poor, his heart is content,
             and a smile is ever on his face.
            A gracious wife delights her husband,
             her thoughtfulness puts flesh on his bones;
            A gift from the Lord is her governed speech,
             and her firm virtue is a surpassing worth.
            Choicest of blessings is a modest wife,
             priceless her chaste soul.
            A holy and decent woman adds grace upon grace;
             indeed, no price is worthy of her temperate soul.
            Like the sun rising in the Lord’s heavens,
             the beauty of a virtuous wife is the radiance of her home.
            The word of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'B-9',
            'Type' => 'FIRST READING',
            'Title' => 'I will make a new convenant with the
            house of Israel and the house of Judah.',
            'BibleVerse' => 'Jeremiah 31:31-32a, 33-34a',
            'Text' => 'A Reading from the Book of the Prophet Jeremiah
            The days are coming, says the Lord,
            when I will make a new covenant with the house of Israel
             and the house of Judah.
            It will not be like the covenant I made with their fathers:
             the day I took them by the hand
            to lead them forth from the land of Egypt.
            But this is the covenant which I will make
             with the house of Israel after those days, says the Lord.
            I will place my law within them, and write it upon their hearts;
            I will be their God, and they shall be my people.
            No longer will they have need to teach their friends and relatives
             how to know the Lord.
            All, from least to greatest, shall know me, says the Lord.
            The word of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'D-1',
            'Type' => 'SECOND READING',
            'Title' => 'What will separate us from the love of Christ?',
            'BibleVerse' => 'Romans 8:31b-35, 37-39',
            'Text' => 'A Reading from the Letter of Saint Paul to the Romans
            Brothers and sisters:
            If God is for us, who can be against us?
            He did not spare his own Son
            but handed him over for us all,
            will he not also give us everything else along with him?
            Who will bring a charge against God’s chosen ones?
            It is God who acquits us.
            Who will condemn?
            It is Christ Jesus who died, rather, was raised,
            who also is at the right hand of God,
            who indeed intercedes for us.
            What will separate us from the love of Christ?
            Will anguish, or distress, or persecution, or famine,
            or nakedness, or peril, or the sword?
            No, in all these things, we conquer overwhelmingly
            through him who loved us.
            For I am convinced that neither death, nor life,
            nor angels, nor principalities,
            nor present things, nor future things,
            nor powers, nor height, nor depth,
            nor any other creature will be able to separate us
            from the love of God in Christ Jesus our Lord.
            The word of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'D-2',
            'Type' => 'SECOND READING',
            'Title' => 'Offer your bodies as a living sacrifice,
            holy and pleasing to God. ',
            'BibleVerse' => 'Long Version, Romans 12:1-2, 9-18',
            'Text' => 'A Reading from the Letter of Saint Paul to the Romans
            I urge you, brothers and sisters, by the mercies of God,
            to offer your bodies as a living sacrifice,
            holy and pleasing to God, your spiritual worship.
            Do not conform yourselves to this age
            but be transformed by the renewal of your mind,
            that you may discern what is the will of God,
            what is good and pleasing and perfect.
            Let love be sincere;
            hate what is evil,
            hold on to what is good;
            love one another with mutual affection;
            anticipate one another in showing honor.
            Do not grow slack in zeal,
            be fervent in spirit,
            serve the Lord.
            Rejoice in hope,
            endure in affliction,
            persevere in prayer.
            Contribute to the needs of the holy ones,
            exercise hospitality.
            Bless those who persecute you,
            bless and do not curse them.
            Rejoice with those who rejoice,
            weep with those who weep.
            Have the same regard for one another;
            do not be haughty but associate with the lowly;
            do not be wise in your own estimation.
            Do not repay anyone evil for evil;
            be concerned for what is noble in the sight of all.
            If possible, on your part, live at peace with all.
            The word of the Lord.',
            
        ]);


        DB::table('readings')->insert([
            'Option' => 'D-3',
            'Type' => 'SECOND READING',
            'Title' => 'Welcome one another as Christ welcomed you.',
            'BibleVerse' => 'Romans 15:1b-3a, 5-7, 13',
            'Text' => 'A Reading from the Letter of Saint Paul to the Romans
            Brothers and sisters:
            We ought to put up with the failings of the weak and not to please ourselves;
             let each of us please our neighbor for the good,
            for building up.
            For Christ did not please himself.
            May the God of endurance and encouragement
            grant you to think in harmony with one another,
            in keeping with Christ Jesus,
            that with one accord you may with one voice
            glorify the God and Father of our Lord Jesus Christ.
            Welcome one another, then, as Christ welcomed you,
            for the glory of God.
            May the God of hope fill you with all joy and peace in believing,
            so that you may abound in hope by the power of the Holy Spirit.
            The word of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'D-4',
            'Type' => 'SECOND READING',
            'Title' => 'Your body is a temple of the Spirit',
            'BibleVerse' => '1 Corinthians 6:13c-15a, 17-20',
            'Text' => 'A Reading from the first Letter of Saint Paul to the Corinthians
            Brothers and sisters:
            The body is not for immorality, but for the Lord,
            and the Lord is for the body;
            God raised the Lord and will also raise us by his power.
            Do you not know that your bodies are members of Christ?
            Whoever is joined to the Lord becomes one spirit in him.
            Avoid immorality.
            Every other sin a person commits is outside the body,
            but the immortal person sins against his own body.
            Do you not know that your body
            is a temple of the Holy Spirit within you,
            whom you have from God, and that you are not your own?
            For you have been purchased at a price.
            Therefore, glorify God in your body.
            The word of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'D-5',
            'Type' => 'SECOND READING',
            'Title' => 'If I do not have love, I gain nothing.',
            'BibleVerse' => '1 Corinthians 12:31-13:8a',
            'Text' => 'A Reading from the first Letter of Saint Paul to the Corinthians
            Brothers and sisters:
            Strive eagerly for the greatest spiritual gifts.
            But I shall show you a still more excellent way.
            If I speak in human and angelic tongues
            but do not have love,
            I am a resounding gong or a clashing cymbal.
            And if I have the gift of prophecy
            and comprehend all mysteries and all knowledge;
            if I have all faith so as to move mountains,
            but do not have love, I am nothing.
            If I give away everything I own,
            and if I hand my body over so that I may boast
            but do not have love, I gain nothing.
            Love is patient, love is kind.
            It is not jealous, is not pompous,
            it is not inflated, it is not rude,
            it does not seek its own interests,
            it is not quick-tempered, it does not brood over injury,
            it does not rejoice over wrongdoing
            but rejoices with the truth.
            It bears all things, believes all things,
            hopes all things, endures all things.
            Love never fails.
            The word of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'D-6',
            'Type' => 'SECOND READING',
            'Title' => 'This is a great mystery, but I speak
            in reference to Christ and the Church.',
            'BibleVerse' => 'Long Version, Ephesians 5:2a, 21-33',
            'Text' => 'A Reading from the Letter of Saint Paul to the Ephesians
            Brothers and sisters:
            Live in love, as Christ loved us
            and handed himself over for us.
            Be subordinate to one another out of reverence for Christ.
            Wives should be subordinate to their husbands as to the Lord.
            For the husband is head of his wife
            just as Christ is head of the Church,
            he himself the savior of the body.
            As the Church is subordinate to Christ,
            so wives should be subordinate to their husbands in everything.
            Husbands, love your wives,
            even as Christ loved the Church
            and handed himself over for her to sanctify her,
            cleansing her by the bath of water with the word,
            that he might present to himself the Church in splendor,
            without spot or wrinkle or any such thing,
            that she might be holy and without blemish.
            So also husbands should love their wives as their own bodies.
            He who loves his wife loves himself.
            For no one hates his own flesh
            but rather nourishes and cherishes it,
            even as Christ does the Church,
            because we are members of his Body.
            “For this reason a man shall leave his father and his mother
            and be joined to his wife,
            and the two shall become one flesh.”
            This is a great mystery,
            but I speak in reference to Christ and the Church.
            In any case, each one of you should love his wife as himself,
            and the wife should respect her husband.
            The word of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'D-7',
            'Type' => 'SECOND READING',
            'Title' => 'This is a great mystery, but I speak
            in reference to Christ and the Church.',
            'BibleVerse' => 'Short Version, Ephesians 5:2a, 25-32',
            'Text' => 'A Reading from the Letter of Saint Paul to the Ephesians
            Brothers and sisters:
            Live in love, as Christ loved us
            and handed himself over for us.
            Husbands, love your wives,
            even as Christ loved the Church
            and handed himself over for her to sanctify her,
            cleansing her by the bath of water with the word,
            that he might present to himself the Church in splendor,
            without spot or wrinkle or any such thing,
            that she might be holy and without blemish.
            So also husbands should love their wives as their own bodies.
            He who loves his wife loves himself.
            For no one hates his own flesh
            but rather nourishes and cherishes it,
            even as Christ does the Church,
            because we are members of his Body.
            “For this reason a man shall leave his father and his mother
            and be joined to his wife,
            and the two shall become one flesh.”
            This is a great mystery,
            but I speak in reference to Christ and the Church.
            The word of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'D-8',
            'Type' => 'SECOND READING',
            'Title' => 'The God of peace will be with you.',
            'BibleVerse' => 'Philippians 4:4-9',
            'Text' => 'A Reading from the Letter of Saint Paul to the Philippians
            Brothers and sisters:
            Rejoice in the Lord always.
            I shall say it again: rejoice!
            Your kindness should be known to all.
            The Lord is near.
            Have no anxiety at all, but in everything,
            by prayer and petition, with thanksgiving,
            make your requests known to God.
            Then the peace of God that surpasses all understanding
            will guard your hearts and minds in Christ Jesus.
            Finally, brothers and sisters,
            whatever is true, whatever is honorable,
            whatever is just, whatever is pure,
            whatever is lovely, whatever is gracious,
            if there is any excellence
            and if there is anything worthy of praise,
            think about these things.
            Keep on doing what you have learned and received
            and heard and seen in me.
            Then the God of peace will be with you.
            The word of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'D-9',
            'Type' => 'SECOND READING',
            'Title' => 'And over all these put on love, that is,
            the bond of perfection.',
            'BibleVerse' => 'Colossians 3:12-17',
            'Text' => 'A Reading from the Letter of Saint Paul to the Colossians
            Brothers and sisters:
            Put on, as God’s chosen ones, holy and beloved,
            heartfelt compassion, kindness, humility, gentleness, and patience,
            bearing with one another and forgiving one another,
            if one has a grievance against another;
            as the Lord has forgiven you, so must you also do.
            And over all these put on love,
            that is, the bond of perfection.
            And let the peace of Christ control your hearts,
            the peace into which you were also called in one Body.
            And be thankful.
            Let the word of Christ dwell in you richly,
            as in all wisdom you teach and admonish one another,
            singing psalms, hymns, and spiritual songs
            with gratitude in your hearts to God.
            And whatever you do, in word or in deed,
            do everything in the name of the Lord Jesus,
            giving thanks to God the Father through him.
            The word of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'D-10',
            'Type' => 'SECOND READING',
            'Title' => 'Let marriage be held in honor by all.',
            'BibleVerse' => 'Hebrews 13:1-4a, 5-6b',
            'Text' => 'A Reading from the Letter to the Hebrews
            Brothers and sisters:
            Let mutual love continue.
            Do not neglect hospitality,
            for through it some have unknowingly entertained angels.
            Be mindful of prisoners as if sharing their imprisonment,
            and of the ill-treated as of yourselves,
            for you also are in the body.
            Let marriage be honored among all
            and the marriage bed be kept undefiled.
            Let your life be free from love of money
            but be content with what you have,
            for he has said, “I will never forsake you or abandon you.”
            Thus we may say with confidence:
            “The Lord is my helper,
            and I will not be afraid.”
            The Word of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'D-11',
            'Type' => 'SECOND READING',
            'Title' => 'Be of one mind, sympathetic, loving toward one another.',
            'BibleVerse' => '1 Peter 3:1-9 ',
            'Text' => 'A Reading from the first Letter of Saint Peter
            Beloved:
            You wives should be subordinate to your husbands so that,
            even if some disobey the word,
            they may be won over without a word by their wives\' conduct
            when they observe your reverent and chaste behavior.
            Your adornment should not be an external one:
            braiding the hair, wearing gold jewelry, or dressing in fine clothes,
            but rather the hidden character of the heart,
            expressed in the imperishable beauty
            of a gentle and calm disposition,
            which is precious in the sight of God.
            For this is also how the holy women who hoped in God
            once used to adorn themselves
            and were subordinate to their husbands;
            thus Sarah obeyed Abraham, calling him "lord."
            You are her children when you do what is good
            and fear no intimidation.
            Likewise, you husbands should live with your wives in understanding,
            showing honor to the weaker female sex,
            since we are joint heirs of the gift of life,
            so that your prayers may not be hindered.
            Finally, all of you, be of one mind, sympathetic,
            loving toward one another, compassionate, humble.
            Do not return evil for evil, or insult for insult;
            but, on the contrary, a blessing, because to this you were called,
            that you might inherit a blessing.
            The Word of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'D-12',
            'Type' => 'SECOND READING',
            'Title' => 'Love in deed and in truth.',
            'BibleVerse' => '1 John 3:18-24',
            'Text' => 'A Reading from the first Letter of Saint John
            Children, let us love not in word or speech
            but in deed and truth.
            Now this is how we shall know that we belong to the truth
            and reassure our hearts before him
            in whatever our hearts condemn,
            for God is greater than our hearts and knows everything.
            Beloved, if our hearts do not condemn us,
            we have confidence in God
            and receive from him whatever we ask,
            because we keep his commandments and do what pleases him.
            And his commandment is this:
            we should believe in the name of his Son, Jesus Christ,
            and love one another just as he commanded us.
            Those who keep his commandments remain in him, and he in them,
            and the way we know that he remains in us
            is from the Spirit that he gave us.
            The word of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'D-13',
            'Type' => 'SECOND READING',
            'Title' => 'God is love.',
            'BibleVerse' => '1 John 4:7-12',
            'Text' => 'A Reading from the first Letter of Saint John
            Beloved, let us love one another,
            because love is of God;
            everyone who loves is begotten by God and knows God.
            Whoever is without love does not know God, for God is love.
            In this way the love of God was revealed to us:
            God sent his only-begotten Son into the world
            so that we might have life through him.
            In this is love:
            not that we have loved God, but that he loved us
            and sent his Son as expiation for our sins.
            Beloved, if God so loved us,
            we also must love one another.
            No one has ever seen God.
            Yet, if we love one another, God remains in us,
            and his love is brought to perfection in us.
            The word of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'D-14',
            'Type' => 'SECOND READING',
            'Title' => 'Blessed are those who have been
            called to the wedding feast of the Lamb.',
            'BibleVerse' => 'Revelation 19:1, 5-9a',
            'Text' => 'A Reading from the Book of Revelation
            I, John, heard what sounded like the loud voice
             of a great multitude in heaven.
             saying:
            “Alleluia!
             Salvation, glory, and might belong to our God.”
            A voice coming from the throne said:
             “Praise our God, all you his servants,
             and you who revere him, small and great.”
            Then I heard something like the sound
            of a great multitude
             or the sound of rushing water
             or mighty peals of thunder,
             as they said:
            “Alleluia!
             The Lord has established his reign,
             our God, the almighty.
             Let us rejoice and be glad
             and give him glory.
             For the wedding day of the Lamb has come,
            his bride has made herself ready.
             She was allowed to wear
            a bright, clean linen garment.”
            (The linen represents the righteous deeds of the holy ones.)
            Then the angel said to me,
            “Write this:
            Blessed are those who have been called
            to the wedding feast of the Lamb.”
            The word of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'F-1',
            'Type' => 'GOSPEL',
            'Title' => 'Rejoice and be glad, for your reward
            will be great in heaven.',
            'BibleVerse' => 'Matthew 5:1-12a',
            'Text' => 'A Reading from the Holy Gospel According to Matthew
            When Jesus saw the crowds, he went up the mountain.
            and after he had sat down, his disciples came to him.
            He began to teach them, saying:
            “Blessed are the poor in spirit,
            for theirs is the Kingdom of heaven.
            Blessed are they who mourn,
            for they will be comforted.
             Blessed are the meek,
            for they will inherit the land.
             Blessed are they who hunger and thirst for righteousness,
            for they will be satisfied.
             Blessed are the merciful,
            for they will be shown mercy.
             Blessed are the clean of heart,
            for they will see God.
             Blessed are the peacemakers,
            for they will be called children of God.
             Blessed are they who are persecuted for the sake of righteousness,
            for theirs is the Kingdom of heaven.
             Blessed are you when they insult you and persecute you
            and utter every kind of evil against you falsely because of me.
             Rejoice and be glad,
            for your reward will be great in heaven.”
            The Gospel of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'F-2',
            'Type' => 'GOSPEL',
            'Title' => 'You are the light of the world.',
            'BibleVerse' => 'Matthew 5:13-16',
            'Text' => 'A Reading from the Holy Gospel According to Matthew
            Jesus said to his disciples:
            “You are the salt of the earth.
            But if salt loses its taste, with what can it be seasoned?
            It is no longer good for anything
            but to be thrown out and trampled underfoot.
            You are the light of the world.
            A city set on a mountain cannot be hidden.
            Nor do they light a lamp and then put it under a bushel basket;
            it is set on a lamp stand,
            where it gives light to all in the house.
            Just so, your light must shine before others,
             that they may see your good deeds
            and glorify your heavenly Father.”
            The Gospel of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'F-3',
            'Type' => 'GOSPEL',
            'Title' => 'A wise man built his house on rock.',
            'BibleVerse' => 'Long Version, Matthew 7:21, 24-29',
            'Text' => 'A Reading from the Holy Gospel According to Matthew
            Jesus said to his disciples:
            “Not everyone who says to me, ‘Lord, Lord,’
            will enter the Kingdom of heaven,
             but only the one who does the will of my Father in heaven.
            Everyone who listens to these words of mine and acts on them
            will be like a wise man who built his house on rock.
            The rain fell, the floods came,
            and the winds blew and buffeted the house.
            But it did not collapse; it had been set solidly on rock.
            And everyone who listens to these words of mine
            but does not act on them
            will be like a fool who built his house on sand.
            The rain fell, the floods came,
            and the winds blew and buffeted the house.
            And it collapsed and was completely ruined.”
            When Jesus finished these words,
            the crowds were astonished at his teaching,
            for he taught them as one having authority,
            and not as their scribes.
            The Gospel of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'F-4',
            'Type' => 'GOSPEL',
            'Title' => 'What God has united, man must not separate.',
            'BibleVerse' => 'Matthew 19:3-6',
            'Text' => 'A Reading from the Holy Gospel According to Matthew
            Some Pharisees approached Jesus, and tested him, saying,
            “Is it lawful for a man to divorce his wife for any cause whatever?”
            He said in reply, “Have you not read that from the beginning
            the Creator made them male and female and said,
            For this reason a man shall leave his father and mother
            and be joined to his wife, and the two shall become one flesh?
            So they are no longer two, but one flesh.
            Therefore, what God has joined together, man must not separate.”
            The Gospel of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'F-5',
            'Type' => 'GOSPEL',
            'Title' => 'This is the greatest and the first
            commandment. The second is like it.',
            'BibleVerse' => 'Matthew 22:35-40',
            'Text' => 'A Reading from the Holy Gospel According to Matthew
            One of the Pharisees, a scholar of the law, tested Jesus by asking,
             “Teacher, which commandment in the law is the greatest?”
            He said to him,
            “You shall love the Lord, your God,
            with all your heart,
            with all your soul,
            and with all your mind.
            This is the greatest and the first commandment.
            The second is like it:
            You shall love your neighbor as yourself.
            The whole law and the prophets depend on these two commandments.”
            The Gospel of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'F-6',
            'Type' => 'GOSPEL',
            'Title' => 'They are no longer two, but one flesh.',
            'BibleVerse' => 'Matthew 10:6-9',
            'Text' => 'A Reading from the Holy Gospel According to Mark
            Jesus said:
            “From the beginning of creation,
            God made them male and female.
            For this reason a man shall leave his father and mother
            and be joined to his wife,
            and the two shall become one flesh.
            So they are no longer two but one flesh.
            Therefore what God has joined together,
             no human being must separate.”
            The Gospel of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'F-7',
            'Type' => 'GOSPEL',
            'Title' => 'Jesus did this as the beginning
            of his signs in Cana in Galilee.',
            'BibleVerse' => 'John 2:1-11',
            'Text' => 'A Reading from the Holy Gospel According to John
            There was a wedding in Cana in Galilee,
            and the mother of Jesus was there.
            Jesus and his disciples were also invited to the wedding.
            When the wine ran short,
            the mother of Jesus said to him,
            “They have no wine.”
            And Jesus said to her,
            “Woman, how does your concern affect me?
            My hour has not yet come.”
            His mother said to the servers,
            “Do whatever he tells you.”
            Now there were six stone water jars there for Jewish ceremonial washings,
            each holding twenty to thirty gallons.
            Jesus told them,
            “Fill the jars with water.”
            So they filled them to the brim.
            Then he told them,
            “Draw some out now and take it to the headwaiter.”
            So they took it.
            And when the headwaiter tasted the water that had become wine,
            without knowing where it came from
            (although the servants who had drawn the water knew),
            the headwaiter called the bridegroom and said to him,
            “Everyone serves good wine first,
            and then when people have drunk freely, an inferior one;
            but you have kept the good wine until now.”
            Jesus did this as the beginning of his signs in Cana in Galilee
            and so revealed his glory,
            and his disciples began to believe in him.
            The Gospel of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'F-8',
            'Type' => 'GOSPEL',
            'Title' => 'Remain in my love.',
            'BibleVerse' => 'John 15:9-12',
            'Text' => 'A Reading from the Holy Gospel According to John
            Jesus said to his disciples:
            “As the Father loves me, so I also love you.
            Remain in my love.
            If you keep my commandments, you will remain in my love,
            just as I have kept my Father’s commandments
            and remain in his love.
            “I have told you this so that my joy might be in you
            and your joy might be complete.
            This is my commandment: love one another as I love you.”
            The Gospel of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'F-9',
            'Type' => 'GOSPEL',
            'Title' => 'This is my commandment: love one another.',
            'BibleVerse' => 'John 15:12-16',
            'Text' => 'A Reading from the Holy Gospel According to John
            Jesus said to his disciples:
            “This is my commandment: love one another as I love you.
            No one has greater love than this,
            to lay down one’s life for one’s friends.
            You are my friends if you do what I command you.
            I no longer call you slaves,
            because a slave does not know what his master is doing.
            I have called you friends,
            because I have told you everything I have heard from my Father.
            It was not you who chose me, but I who chose you
            and appointed you to go and bear fruit that will remain,
            so that whatever you ask the Father in my name he may give you.”
            The Gospel of the Lord.',
            
        ]);

        DB::table('readings')->insert([
            'Option' => 'F-10',
            'Type' => 'GOSPEL',
            'Title' => 'That they may be brought to perfection as one.',
            'BibleVerse' => 'Long Version, John 17:20-26',
            'Text' => 'A Reading from the Holy Gospel According to John
            Jesus raised his eyes to heaven and said:
            “I pray not only for my disciples,
            but also for those who will believe in me through their word,
            so that they may all be one,
            as you, Father, are in me, and I in you,
            that they also may be in us,
            that the world may believe that you sent me.
            And I have given them the glory you gave me,
            so that they may be one, as we are one,
            I in them, you in me,
            that they may be brought to perfection as one,
            that the world may know that you sent me,
            and that you loved them even as you loved me.
            Father, they are your gift to me.
            I wish that where I am they also may be with me,
             that they may see my glory that you gave me,
             because you loved me before the foundation of the world.
            Righteous Father, the world also does not know you,
             but I know you, and they know that you sent me.
            I made known to them your name and I will make it known,
             that the love with which you loved me
             may be in them and I in them.”
            The Gospel of the Lord.',
            
        ]);
    }
}
