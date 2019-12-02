@extends('layout.layout')

@section('content')

    <h1 class="cooking-title">Guides</h1>

    <div class="card">
        <details class="card-header">
            <summary><strong>Classes</strong></summary>
            <div class="card-body">
                <details>
                    <summary><strong>Warrior</strong></summary>
                    <div class="left"> Warriors are skilled fighters with both good attack and defense.</div>
                    <br>Using the Sword and Shield as their main weapons, they are the best weapon-wielders among all
                    the classes.
                    During battle, Warriors will show off their fearlessness with storm-like barrage of melee combat
                    moves. After Awakening, they use two-handed Great Swords to deliver devastating blows
                    to their enemies.

                </details>
                <details>
                    <summary><strong>Ranger</strong></summary>
                    <div class="left"> Rangers are the specialists of ranged archery attacks.</div>
                    <br>Under the grace of the Sylphs, Rangers present swift movement in any situation of battle. Most
                    of their skills are based on preventing enemies' attempt of melee approach. The Sylph's mystic power
                    is the source of their ability. After Awakening, they can wield the Kamasylven Sword to use melee
                    type attacks.
                </details>
                <details>
                    <summary><strong>Sorceress</strong></summary>
                    <div class="left"> Sorceresses can effectively control the battlefield with dark magic by using both
                        melee and ranged attacks.
                    </div>
                    <br>They lure enemies with ranged magic and lead them to a chaos and painful demise once they
                    come closer. Other races revere and fear the Sorceresses. After Awakening, they can use dark
                    magic shroud themselves in darkness, and use a giant Scythe to cut down their enemies.
                </details>
                <details>
                    <summary><strong>Berserker</strong></summary>
                    <div class="left"> Berserkers wield monstrous double-axes as big as their own bodies.</div>
                    <br>Berserkers overwhelm their enemies with their size and outrageous strength, annihilating them
                    with ease. Although their physique makes them slow-moving, improved skills will compensate for that.
                    After Awakening, they can use the Iron Buster to send powerful blasts at the enemy, almost like a
                    small portable cannon.
                </details>
                <details>
                    <summary><strong>Valkyrie</strong></summary>
                    <div class="left"> Valkyries are armed with sword, shield, and divine magic.</div>
                    <br>They can use their weapons to powerful blows to their enemies. They can also use their divine
                    magic for healing and empowering allies. After Awakening, they can use Lancia, a weapon that is even
                    taller than a Valkyrie and greatly boosts her great offense and defense.
                </details>
                <details>
                    <summary><strong>Wizard/Witch</strong></summary>
                    <div class="left"> Wizards/Witches are known for their prudence in battle.</div>
                    <br>In exchange for the casting time delay, they can perform large-scale magical attacks. Their
                    thorough moves will burn, freeze and shatter their enemies with the power of natural elements such
                    as fire, ice, wind, lightning, and earth. After Awakening, They can use the Godr Sphera/Aad Sphera
                    to gain even great control over earth and lightning, and can summon the Earth and Lightning
                    guardians.
                </details>
                <details>
                    <summary><strong>Tamer</strong></summary>
                    <div class="left"> Tamers can fight enemies at any range.</div>
                    <br>With the support of Heilang, the divine beast, Tamers can perform ruthless combination attack
                    with Heilang, or take the enemy down themselves while borrowing the divine force from the beast.
                    After Awakening, they can use the Celestial Bo Staff to channel the divine power as the true master
                    of Heilang.
                </details>
                <details>
                    <summary><strong>Maehwa/Musa</strong></summary>
                    <div class="left"> Maehwas/Musas fight with oriental-style martial arts and with the blade and horn
                        bow.
                    </div>
                    <br>Maehwas/Musas are specialists in 1-on-1 showdowns, since their fast and precise attack combos
                    can target enormous amount of damage at once. After Awakening, they use the Kerispear/Crescent Blade
                    to deliver lethal stabs.
                </details>
                <details>
                    <summary><strong>Ninja/Kunoichi</strong></summary>
                    <div class="left"> Ninjas use sword, martial arts, and Ninjutsu.</div>
                    <br>The swarm of attacks consisting of swift movement, smoke shells, and unique skills such as
                    hiding and pulling the enemy into the middle of total chaos. With proper control, a Ninja can flip
                    the battle by discreetly raiding important figures. After Awakening, they can use the Sura
                    Katana/Sah Chakram to attack their enemies before they even realize what’s hit them.
                </details>
                <details>
                    <summary><strong>Dark Knight</strong></summary>
                    <div class="left"> Dark Knights fight with the Kriegsmesser and magic.</div>
                    <br>They tend to spring up at an enemy and strikes blows with the fearsome Kriegsmesser. They can
                    use magic for mid- and long-distance for more damage. After Awakening, they can use the Vediant to
                    freely switch between close and ranged attacks.
                </details>
                <details>
                    <summary><strong>Striker</strong></summary>
                    <div class="left"> Strikers are hand-to-hand combatants who attained their skills through countless
                        street brawls.
                    </div>
                    <br>From heavy punches to powerful kicks, their martial arts skills are matchless. After
                    Awakening, they can use the Gardbrace on their both arms, and can also summon Echo Spirits to
                    ambush their enemies from all sides.
                </details>
                <details>
                    <summary><strong>Mystic</strong></summary>
                    <div class="left"> Mystics are hand-to-hand combatants who attained their skills after countless
                        years training in the East.
                    </div>
                    <br>From heavy punches to powerful kicks, their martial arts skills are matchless and elegant.
                    After Awakening, they can channel the aura of the Sea Dragon to deliver powerful blows with the
                    pair of Cestus on their arms.
                </details>
                <details>
                    <summary><strong>Lahn</strong></summary>
                    <div class="left"> Lahns wield the Noble Sword and Crescent Pendulum.</div>
                    <br>The Noble Sword and Crescent Pendulum are connected by a long cloth or chain, allowing Lahns to
                    freely attack from all directions. Lahns are agile and quick on their feet, and can quickly deliver
                    devastating attacks by swinging their Crescent Pendulum. By careful manipulation of the swinging
                    motion, they can even deliver back attacks with the Crescent Pendulum from the front as well as
                    various combo attacks.
                </details>
            </div>
        </details>
        <details class="card-header">
            <summary><strong>Life Skills</strong></summary>
            <div class="left"><strong>All Life Skills are leveled as followed</strong></div>
            <br><strong>- Gathering:</strong> Using an axe, hoe, tanning knife, butcher knife, fluid collector, pickaxe,
            empty bottle, shabby shovel, bare handed.
            <br><strong>- Processing:</strong> AFK chop, heat, dry, filter, shake, and grind resources into processed
            materials.
            <br><strong>- Cooking:</strong> AFK cook gathered material inside your residence on a Cooking Utensil.
            <br><strong>- Alchemy:</strong> AFK brew gathered material inside your residence on an Alchemy Tool.
            <br><strong>- Training:</strong> Taming wild horses, AFK running horses on a loop.
            <br><strong>- Fishing:</strong> AFK fishing or active fishing via mini game.
            <br><strong>- Hunting:</strong> Active hunting with a Matchlock and butchering the corpse with a Butcher
            Knife.
            <br><strong>- Trading:</strong> Active or semi-AFK trading by buying or making trade goods and delivering
            them far away.
            <br><strong>- Farming:</strong> Planting seed in a rented fence and tending the crops.
            <br><strong>- Sailing:</strong> Sailing quests, hunting sea monsters.
        </details>
        <details class="card-header">
            <summary><strong>Quests</strong></summary>
            <div class="left"><strong>All the different kinds of Quest Black Desert Online has to offer:</strong></div>
            <br><strong>Quests of the Dark Spirit:</strong>
            <br>Along your journey around the world, you are accompanied by the Black Spirit.
            He will give you Quests from time to time and the player will receive rewards when completed.
            <br>
            <br><strong>Main Story:</strong>
            <br>The Main Story is filled with Quest that the player can follow if they are interested in the story. It's
            highly recommended that you follow these Quest, because the player will receive rewards at the end of each
            Quest that can be useful during the journey that the player makes. The Quest can be followed from the
            beginning of the game.
            <br>
            <br><strong>City Quests:</strong>
            <br>Along the journey of the player, the player will come across cities. In those cities the player can find
            a lot of Quest that can be completed. These are Side Quest and not important when following the Main Story.
            All though when completed, the player will receive rewards.
            <br>
            <br><strong>Crafting Quests:</strong>
            <br>Another kind of Side Quests. Crafting Quests are mainly mend for the kind player who wants to level
            their skill level. In order to completed theses kinds of Quest, the player needs to craft items. When
            completed the player will receive rewards.
            <br>
            <br><strong>Daily and Weekly Quests</strong>
            <br>The name may give it away already, but the Daily and Weekly Quests are timed Quests. After a Day of Week
            the Quests, including the rewards, will be changed. These Quests are mainly for the veteran players who find
            joy in new and fresh Quests.
            <br>
            <br><strong>Trading Quests</strong>
            <br>Another kind of Side Quests. Trading Quests require the player to transport or trade items. The player
            will receive a lot of money for completing these Quests. These Quests are mainly for the kind of players who
            want to take a break from grinding and killing mobs.
            <br>
            <br><strong>Exploration Quests</strong>
            <br>Another kind of Side Quests. The Exploration Quests are completed randomly while traveling across the
            world. When completed the player will receive rewards.
        </details>
        <details class="card-header">
            <summary><strong>Accessories</strong></summary>
            <div class="card-body">
                <details>
                    <summary><strong>Green Grade Accessories:</strong></summary>
                    <div class="left"><strong>Green accessories</strong> are easy to get hold off in Black Desert
                        Online, and you’ll loot plenty on your way to the grinding top. It’s not really worth it to
                        spend anything on enhancing them, since they are quite weak, and one-sided stat-wise.
                    </div>

                    <strong><br>Bares Accessory Set:</strong>
                    <br> Bares Necklace
                    <br> Bares Earrings
                    <br> Bares Ring
                    <p> Bares Belt</p>

                    <strong>Kalis Accessory Set:</strong>
                    <br> Kalis Necklace
                    <br> Kalis Earring
                    <br> Kalis Ring
                    <p> Kalis Belt</p>

                    <strong>Talis Accessory Set:</strong>
                    <br> Talis Necklace
                    <br> Talis Earrings
                    <br> Talis Ring
                    <p> Talis Belt</p>

                    <strong>Yuria Accessory Set:</strong>
                    <br> Yuria Necklace
                    <br> Yuria Earrings
                    <br> Yuria Ring
                    <p> Yuria Belt</p>

                    <strong>Hesus Accessory Set:</strong>
                    <br> Hesus Necklace
                    <br> Hesus Earrings
                    <br> Hesus Ring
                    <p> Hesus Belt</p>
                </details>
                <details>
                    <summary><strong>Blue Grade Accessories:</strong></summary>
                    <div class="left"><strong>Blue accessories</strong> don’t drop that often, and you can sell (or buy)
                        each of them for a few million silver. Since getting good boss-gear accessories is going to be a
                        huge journey, you’ll want to start swapping your Asula’s for the best blue pieces you can get.
                    </div>
                    <br>
                    <strong><p>Jarette’s Accessory Set:</strong>
                    <br> Jarette's Necklace
                    <br> Jarette's Earring
                    <br> Jarette's Ring
                    <br> Jarette's Belt

                    <strong><p>Treant Spirit’s Accessory Set:</strong>
                    <br> Treant Spirit's Cheer Necklace
                    <br> Treant Spirit's Cheer Earring
                    <br> Treant Spirit's Cheer Ring
                    <br> Treant Spirit's Cheer Belt

                    <strong><p>Asula’s Crimson Eye Accessory Set:</strong>
                    <br> Asula's Crismon Eye Necklace
                    <br> Asula's Crismon Eye Earring
                    <br> Asula's Chismon Eye Ring
                    <br> Asula's Chismon Eye Belt
                </details>
            </div>
        </details>
    </div>


@endsection