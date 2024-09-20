1.1  What is Class? 
	In object-oriented programming: a class is a blueprint or template to create an object. It contains  property,(attribute,filed) method(function),  
একটি ক্লাস হলো অবজেক্ট-অরিয়েন্টেড প্রোগ্রামিংয়ের (OOP) মূল ভিত্তি। ক্লাসকে আমরা একটি নীল নকশা (blueprint) বলতে পারি যা বিভিন্ন অবজেক্ট তৈরি করে। এটি কিছু বৈশিষ্ট্য (properties) এবং আচরণ (methods) ধারণ করে, যেগুলি পরে অবজেক্ট তৈরি করার সময় ব্যবহার করা হয়।
1,2 What is property 

A property is a variable in object-oriented programming, that is attached to a class and stores data related to the object created from that class. Properties act as characteristics or attributes of objects.

একটি প্রোপার্টি হলো অবজেক্ট-অরিয়েন্টেড প্রোগ্রামিং (OOP)-এর এমন একটি ভ্যারিয়েবল যা একটি ক্লাসের সাথে সংযুক্ত থাকে এবং সেই ক্লাস থেকে তৈরি করা অবজেক্টের সাথে সম্পর্কিত ডেটা সংরক্ষণ করে। প্রোপার্টি মূলত অবজেক্টের বৈশিষ্ট্য বা অ্যাট্রিবিউট হিসেবে কাজ করে।
প্রোপার্টির গুরুত্বপূর্ণ পয়েন্টগুলো:
প্রোপার্টি ভ্যারিয়েবলের মতো, তবে এটি ক্লাস বা অবজেক্টের অন্তর্ভুক্ত।
অবজেক্টের মধ্যে ডেটা সংরক্ষণ করতে প্রোপার্টি ব্যবহার করা হয় (যেমন: মান বা অবস্থা)।
অনেক প্রোগ্রামিং ভাষায়, প্রোপার্টি পাবলিক, প্রাইভেট, বা প্রোটেক্টেড হতে পারে, যা নির্ধারণ করে কে প্রোপার্টিতে অ্যাক্সেস করতে পারবে।
1,3 What is method 

In object-oriented programming (OOP), a method is a function that is defined within a class and is associated with an object of that class. Methods are used to perform actions on the attributes of the objects or manipulate the object's data. They can access and modify the object's attributes and define the behavior of the objects created from the class

মেথড হলো অবজেক্ট-অরিয়েন্টেড প্রোগ্রামিং (OOP)-এর একটি ফাংশন যা কোনো নির্দিষ্ট ক্লাসের সাথে যুক্ত থাকে। মেথডের মাধ্যমে অবজেক্টের আচরণ বা কার্যকলাপ নির্ধারণ করা হয়। মেথড একটি কাজ সম্পাদন করতে ব্যবহৃত হয়, যেমন ডেটা প্রসেস করা, প্রোপার্টির মান পরিবর্তন করা ইত্যাদি।
মেথডের বৈশিষ্ট্য:
মেথড হলো ক্লাসের ভেতরে থাকা ফাংশন।
এটি ক্লাসের প্রোপার্টি বা অন্য মেথডকে ব্যবহার করে কাজ সম্পন্ন করে।
মেথডে ক্লাসের ভিতরে ডিফাইন করা ডেটা ব্যবহার করা যায় এবং বাইরের ডেটাও পাস করা যায়।
1.4  Constructor 
In object-oriented programming (OOP), a constructor is a special method automatically called when a class's object (instance) is created. The primary purpose of a constructor is to initialize the object’s attributes or set up any necessary state when the object is instantiated.

Key Features of a Constructor:
Initialization: The constructor initializes an object with specific values or settings when it is created.
Automatic Invocation: It is called automatically when an object is instantiated, so you don't need to call it explicitly.
Defined in Class: The constructor is defined as part of a class and is often named in a way that makes it distinct (depending on the programming language
কনস্ট্রাক্টর হলো একটি বিশেষ ধরনের মেথড যা কোনো ক্লাসের অবজেক্ট তৈরি হওয়ার সময় স্বয়ংক্রিয়ভাবে কল হয়। কনস্ট্রাক্টরের প্রধান কাজ হলো ক্লাসের প্রোপার্টিগুলোকে প্রাথমিক মান (initial values) দিয়ে সেট করা, যাতে অবজেক্ট তৈরি করার সময় প্রয়োজনীয় ডেটা সরাসরি সেট করা যায়।
কনস্ট্রাক্টরের বৈশিষ্ট্য:
কনস্ট্রাক্টরের নাম সাধারণত ক্লাসের নামের সাথে মিলে যায় (অনেক প্রোগ্রামিং ভাষায়)।
এটি স্বয়ংক্রিয়ভাবে কাজ করে যখন কোনো নতুন অবজেক্ট তৈরি করা হয়।
কনস্ট্রাক্টর কোনো রিটার্ন টাইপ নির্দিষ্ট করে না।
