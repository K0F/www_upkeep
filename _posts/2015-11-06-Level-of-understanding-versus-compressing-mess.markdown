---
layout: post
title:  "Level of understanding versus compressing mess"
date:   2015-11-06 03:50:02
categories: kof notes
---

It had been a long time since I first realized how successful can mathematics and algorithms be in order of *worlds reduction*. I remember how fascinating it was to see some physically accurate photo realistic renderings and hi--res calculations of fluid dynamics. Those very complex simulations were steadily improved to a point of near--perfect illusions. Behind the scene, wonderfully abstracted and derived algorithms were computing such illusion of understanding. Those little elegant formulas made an interesting connection between a source data (vector graphics and parametric maps) and millions of resulting pixels resulting into image. This was the first time I have realized that what I am witnessing is a huge compress ratio, made by understanding of image itself. Comparing a ratio of actual data inputs into system, such as geometry description, light sources positions, surface properties etc.; to number and level of detail of outputting bitmap is really enormous. This is all about a level of reduction (read understanding) which makes this ratio even greater.

Probably around the same time I discovered this mysterious algorithm called *Perlin noise*, named after its inventor Ken Perlin. It has a certain property of generating pseudo random patterns, which are repeatable once you know so called seed number and position to seek. From that point this noise generates continuous flow of values as it is moving thought abstract vector field. I started to dream of such system which could find similar patterns in this vector field to mimic certain values just by saving some of initial settings. This way if you seek, let's say a long time, you can probably find any thinkable pattern in this dictionary. This way a simple look--up in such system would be possible just by entering initial setup numbers.

This is a method called brute force and it is quite stupid. Interesting advantage is that you don't need to have any level of understanding the set. The problem is. A seeking in such system is heavily time--intense and resulting derivation is very hardly accurate. There are probably more elegant solutions such as Fourier transformations and reverse FFT[^1] algorithms finding patterns by sinusoidal multiplications and further fitting function finding. Or some systems close to neural network trained to replicate some patterns.

What is still fascinating about all these systems and what they have in common is an actual ratio needed to enter and possible outputs such system. In some cases of certain algorithms even without having an actual knowledge about how the resulting pattern were build.

![Image Alt](https://i.imgur.com/pjTU1vcm.jpg)

All those thoughts lead me to a dream of library of patterns, revocable by simple pointer to a system for any combination of data of any kind. And what is wonderful it actually already sort of exists.. [Library of Babel](http://www.libraryofbabel.info/).


[^1]: _acronym_ for Fast Fourier Transform
