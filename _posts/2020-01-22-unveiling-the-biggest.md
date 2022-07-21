---
title: Unveiling the Biggest and Most Detailed Map of the Fly Brain Yet
author: jackie
date: 2020-01-22 00:00:00 +0800
categories: [Reviewer, Stephen M. Plaza]
tags: [connectomics, fly]
img_path: https://raw.githubusercontent.com/JackieZhai/JackieZhai.github.io-CDN/master/posts/20200122
---

**Janelia and Google scientists have constructed the most complete map of the fly brain ever created, pinpointing millions of connections between 25,000 neurons. Now, a wiring diagram of the entire brain is within reach.**

<p align="center"><iframe width="560" height="315" src="https://www.youtube.com/embed/I9cTwWYDrRE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>

In a darkened room in Ashburn, Virginia, rows of scientists sit at computer screens displaying vivid 3-D shapes. With a click of a mouse, they spin each shape to examine it from all sides. The scientists are working inside a concrete building at the Howard Hughes Medical Institute’s Janelia Research Campus, just off a street called Helix Drive. But their minds are somewhere else entirely – inside the brain of a fly.

Each shape on the scientists’ screens represents part of a fruit fly neuron. These researchers and others at Janelia are tackling a goal that once seemed out of reach: outlining each of the fly brain’s roughly 100,000 neurons and pinpointing the millions of places they connect. Such a wiring diagram, or connectome, reveals the complete circuitry of different brain areas and how they're linked. The work could help unlock networks involved in memory formation, for example, or neural pathways that underlie movements.

[Gerry Rubin](https://www.janelia.org/people/gerry-rubin), vice president of HHMI and executive director of Janelia, has championed this project for more than a decade. It’s a necessary step in understanding how the brain works, he says. When the project began, Rubin estimated that with available methods, tracing the connections between every fly neuron by hand would take 250 people working for two decades – what he refers to as “a 5,000 person-year problem.”

Now, a stream of advances in imaging technology and deep-learning algorithms have yanked the dream of a fly connectome out of the clouds and into the realm of probability. High-powered customized microscopes, a team of dedicated neural proofreaders and data analysts, and a partnership with Google have sped up the process by orders of magnitude.

Today, a team of Janelia researchers reports hitting a critical milestone: they’ve traced the path of every neuron in a portion of the female fruit fly brain they’ve dubbed the “hemibrain.” The map encompasses 25,000 neurons – roughly a third of the fly brain, by volume – but its impact is outsized. It includes regions of keen interest to scientists — those that control functions like learning, memory, smell, and navigation. With more than 20 million neural connections pinpointed so far, it’s the biggest and most detailed map of the fly brain ever completed. 

The connectome project team, known as [FlyEM](https://www.janelia.org/project-team/flyem), is making [the data — and all of the tools necessary to use it — available for free](https://www.janelia.org/project-team/flyem/hemibrain). They describe the work in [a paper posted to bioRxiv](https://www.biorxiv.org/content/10.1101/2020.01.21.911859v1) on January 21, 2020. And they’re currently on track to complete a connectome of the entire fly nervous system by 2022.

![figure tracing](/tracing.gif){: .shadow width="1800" height="1050" style="max-width: 90%" }
_By tracing the winding paths of neurons in the fly brain, scientists have revealed how these cells link up and work together, such as these neurons involved in navigation. Credit: FlyEM/Janelia Research Campus._

“This was a big bet on something people thought was almost impossible to do,” says [Viren Jain](https://research.google/people/VirenJain/), a research scientist at Google and former laboratory head at Janelia. “This will be the first time that we can really have a nuanced look at the organization of a nervous system with 100,000 neurons on a synaptic scale.”

With a detailed neural map in hand, scientists will be able to answer questions about how the brain works faster than ever before. “This is going to change the way people do neuroscience,” Rubin says.

### A blueprint of the brain

To date, only one organism has had its complete connectome mapped — Caenorhabditis elegans, a tiny, transparent worm with just 302 neurons and roughly 7,000 neural connections. Scientists shaved off ribbons of tissue using a diamond knife, captured images with an electron microscope, and then traced the path of every neuron in the worm’s nervous system­ — by hand.

The work required painstaking attention to detail. But worm neurons are not nearly as numerous as those of flies, mice, or people – and they tend to make fewer connections. Untangling the tendrils snaking through the brains of larger animals is monumentally more difficult. Connectome projects on more complex brains have either tackled a small part of the brain in great detail, or mapped neurons throughout a whole brain but captured only a fraction of the cells.

![figure region](/region.jpg){: .shadow width="2560" height="1528" style="max-width: 90%" }
_The hemibrain dataset encompasses the part of the fly brain highlighted here in blue. This region includes neurons involved in learning, navigation, smell, vision, and many other functions. Credit: FlyEM/Janelia Research Campus._

As tiny as the fly brain may appear – it’s about the size of a poppy seed –  mapping its 100,000 neurons in exquisite detail is a challenge on a whole new level. Fifteen years ago, “many neurobiologists were skeptical about the value of having this type of data about the brain,” especially given how laborious it would be to collect, Jain says.

First, researchers have to coax high-resolution brain images from powerful microscopes. Then they must map the neural snarls that unfurl through both hemispheres, for each neuron. Like sequencing the human genome, getting the job done didn’t rest on a scientific breakthrough, Rubin says, but rather on technological innovation and human logistics.

For him, that was a worthwhile challenge. “I was motivated by the skeptics,” he says. “We knew we had to make the process more than 100 times more efficient, but that’s exactly the kind of project that Janelia was established to carry out,” Rubin adds.

The first hurdle: getting a clear, crisp view of each neuron meandering through the fly brain.

### Neural snapshots

Behind several sets of locked doors and white floor-length curtains, eight hefty microscopes are ready to image the brain of a fly. In this hushed room, nothing interferes with image collection. [Harald Hess](https://www.janelia.org/people/harald-hess), [C. Shan Xu](https://www.janelia.org/people/c-shan-xu), and their colleagues have prepared these microscopes for everything but the apocalypse.

“We call it the ‘Act of God-Proof Room’,” says Hess, a senior group leader at Janelia. 

![figure microscope](/microscope.jpg){: .shadow width="2000" height="1333" style="max-width: 90%" }
_Janelia researchers have engineered these electron microscopes to run continuously for weeks to image sections of the fly brain bit by bit. The eight scopes (four shown in this image) are housed in a climate-controlled vibration-proof room to minimize the risk of disruptions to data collection. Credit: Matt Staley, Janelia Research Campus._

Microscopes rest on inflated air pads to minimize vibration. Even the room itself was built to dampen noise; it sits on its own concrete slab, separate from the rest of the building.

These microscopes were originally designed to capture data over minutes or hours. But to image the entire fly brain, a scope needs to run continuously for months or years. A single gap in the data can throw everything off, Hess says. “It really has to be perfect.” So his team has spent nearly a decade fine-tuning every part of the image-collection process, [described in a November 2019 bioRxiv paper](https://www.biorxiv.org/content/10.1101/852863v1). The microscopes can now churn out consistently sharp images, revealing the brain’s labyrinth of neurons in intricate detail. If anything malfunctions, the scopes automatically pause data collection and send out an SOS.

Hess, Xu, and their colleagues use a technique called focused-ion beam scanning electron microscopy, or FIB-SEM. The scope uses a focused ion beam to mill away fine increments of fly brain tissue, like a very precise sandblaster. It shoots gallium ions at a chunk of tissue, polishing the surface atom by atom. The microscope snaps an image of the tissue surface, polishes off another thin layer, and snaps another picture ­– over and over again until the entire sample is milled away. As the physical specimen slowly disappears, its digital twin is stored forever, piece by piece.

Then, computer programs align these images and stitch them back together to create a 3-D representation of the fly brain.

The images used for the wiring diagram – all from a single female fly – have already been collected. But the scopes are still running strong: they’re now collecting data from a male fly’s brain. This time, the goal is to capture the entire central nervous system. If all goes without a hitch, the scopes will finish that task by the end of 2020.

Storing images from a single fly brain would take up about 100 terabytes on a hard drive. That’s roughly the equivalent 100 million photos on your computer, says Steve Plaza, leader of the FlyEM project team. It’s far too much data for humans to comb through by hand — the strategies that worked on C. elegans fall short. So researchers have found ways to speed up the process, training computers to do the job automatically.  

### Teaming up with a tech giant

Computers can do all sorts of image-related tasks, such as recognizing faces or spotting roads in satellite images. These tasks rely, in part, on a process called image segmentation: breaking up a digital image into its constituent pieces and labeling each one.

For years, Google has been experimenting with ways to improve this process. Jain and his colleagues wanted to build segmentation technology and apply it to a challenging problem. Analyzing images of neurons fit the bill. But teaching an algorithm how to reliably pick out, or segment, neurons in images, requires lots of training examples. So, Jain reached out to the FlyEM team at Janelia, who were churning out data faster than they could analyze it. The two groups began sharing data and tracking how well Google’s algorithms were following neural fibers through layers of imaging data.

![figure color](/color.gif){: .shadow width="1800" height="700" style="max-width: 90%" }
_Electron microscopes capture grayscale images of the fly brain. Then, humans (and carefully trained algorithms) determine where each neuron starts and ends, giving each one a different color. Credit: FlyEM/Janelia Research Campus._

“Google provided a lot of intellectual horsepower and a lot of computational horsepower,” Rubin says – they had the latest technology, and the resources to devote to testing algorithms on huge datasets. “It was an ideal collaboration – teams that had different expertise working together.”

Ideally, Jain says, computers could just pick out neurons directly from the microscope images. But that’s hard to do, because many neurons splay tendrils over large swaths of the brain, spanning many images. In the past, algorithms have taken a piecemeal approach. First, a computer algorithm identifies cell boundaries separating neurons from everything else in the brain. Then, another algorithm colors inside those boundaries, defining each section as a piece of neuron. Finally, a third algorithm links all the neural pieces together, forming a blueprint of each neuron’s tangled path.

Google’s algorithms scrap all those steps, tracing neurons more organically – like a human. One algorithm, [called a flood-filling network](https://www.nature.com/articles/s41592-018-0049-4), directly follows neural tendrils end-to-end as it scrolls through imaging data, Jain says. It makes decisions about how to extend a neuron’s shape based on image context and its own prior predictions. Jain and his colleagues at Google describe the work January 22, 2020, [in a post on the Google AI blog](https://ai.googleblog.com/2020/01/releasing-drosophila-hemibrain.html).

To help the program learn, the team has fed it fully-traced, human-validated neurons, says [Michal Januszewski](https://research.google/people/MichalJanuszewski/), a Google researcher who works on the project. That gives the algorithm experience interpreting varied kinds and shapes of neurons, from across the brain. “Hopefully, it learns over time to correct the mistakes that originally had to be corrected by hand,” he says.

As the algorithm improves, the human workload decreases. Working with Google has made the project go more than 10 times faster, Rubin estimates.

### Full steam ahead

Despite the algorithm’s success, computers don’t get the final word. Back at Janelia, dozens of human proofreaders pore over the data, at desks crowded with big-screen monitors. These technicians search for places where the algorithm has incorrectly merged neural branches belonging to different neurons or mistakenly split a branch apart.

![figure proofread](/proofread.jfif){: .shadow width="2000" height="1333" style="max-width: 90%" }
_Computer algorithms follow the threads of individual neurons through images captured by electron microscopes, and pinpoint where those neurons connect. Then, human proofreaders check the computers’ work and fill in missing pieces. Credit: Matt Staley, Janelia Research Campus._

“There’s still a lot of manual effort required,” says [Ruchi Parekh](https://www.janelia.org/people/ruchi-parekh), who leads a team of neuron tracers and proofreaders. In the last four years, her team has grown to nearly 50 people, to keep pace with the segmented data that Google is sending back at ever-faster rates. Another team, led by [Pat Rivlin](https://www.janelia.org/people/pat-rivlin), continuously evaluates and tests new technologies to make the proofreading process more efficient and accurate. But the painstaking work still requires enormous patience. Proofreaders scroll through layers of imaging data, peering at proposed connection points from multiple angles to determine whether the two neurons really do communicate.

When it comes to tracing neurons, humans are still better than algorithms in many ways, says Plaza. Humans have the general knowledge and awareness that lets them spot oddities in the data, he explains. “Basically, humans have common sense.”

For instance, big connection errors are usually obvious to the human eye. So proofreaders can quickly scan large chunks of data, looking for dramatically misshapen neurons. When they spot something that seems amiss, they can investigate in finer detail.

The team’s ultimate goal is to create a resource useful to other scientists. That has meant thinking through how data is stored and presented, too. Plaza and his colleagues have built programs to make sifting through the dataset more approachable. “We have a really big dataset – it’s a lot for anyone to understand,” he says. “Having a tool that allows you to decompose that data into interpretable units is key.” Now scientists interested in a specific neuron can find out what it looks like and which cells it connects to – and which other neurons have similar qualities and might be related.

Plaza and his team will continue to refine their connectome and publish updated versions. Researchers interested in how neurons in these already-mapped regions connect to the rest of the brain will have to wait a couple of years for the full connectome to be completed. But the current data are already revealing insights and opening new questions.

A big question for scientists now is “How do you analyze the connectome and then make sense of what you’re seeing?” Parekh says. “The data is there. What do you do with it?”

For Rubin, who will step down as executive director of Janelia later this month and return full-time to his Janelia lab, this milestone is just the beginning. “It’s satisfying to see it succeed — it is the scientific achievement that I am the most proud of from my time as director, in part because it required complementary contributions from so many talented people working together for over a decade,” he says. “But personally, I’m interested in using this knowledge to learn how the brain works.”

> Scheffer L, Xu C, Januszewski M, *et al*. A connectome and analysis of the adult Drosophila central brain [J]. *eLife*, 2020, 9. DOI: [10.7554/eLife.57443](https://doi.org/10.7554/eLife.57443). <br>
[![Overleaf Paper](https://img.shields.io/badge/Paper-link-blue?style=social&logo=overleaf)](https://elifesciences.org/articles/57443)

> The original post: [https://www.janelia.org/news/unveiling-the-biggest-and-most-detailed-map-of-the-fly-brain-yet](https://www.janelia.org/news/unveiling-the-biggest-and-most-detailed-map-of-the-fly-brain-yet).
{: .prompt-info }
