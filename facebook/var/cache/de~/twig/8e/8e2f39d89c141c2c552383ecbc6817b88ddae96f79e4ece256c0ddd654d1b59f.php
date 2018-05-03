<?php

/* profile.html.twig */
class __TwigTemplate_ecb3b61018d3aa027f461906fc887db4aca2353b89bc69465a543655a5cd3ead extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "profile.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"grid-container.fluid\">



\t<div class=\"grid-x grid-padding-x menu\">

\t\t<div class=\"large-3 medium-3 cell\">
\t\t\t<h1>*Logo*</h1>
\t\t</div>

\t\t<div class=\"large-2 medium-2 cell\">
\t\t\t<input type=\"text\" class=\"menu\" placeholder=\"Chercher...\" />
\t\t</div>

\t\t<div class=\"large-2 medium-2 cell lienAccueil\">
\t\t\t<a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"menu\">Accueil</a>
\t\t</div>

\t\t<div class=\"large-1 medium-1 cell\">
\t\t\t<img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/img/invitations.png"), "html", null, true);
        echo "\" class=\"menu\" alt=\"Invitations\" />
\t\t</div>

\t\t<div class=\"large-1 medium-1 cell\">
\t\t<a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message");
        echo "\">\t<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/img/messages.png"), "html", null, true);
        echo "\" class=\"menu\" alt=\"Messages\" /></a>
\t\t</div>

\t\t<div class=\"large-1 medium-1 cell\">
\t\t\t<img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/img/parametres.png"), "html", null, true);
        echo "\" class=\"menu\" alt=\"Paramètres\" />
\t\t</div>

\t\t<div class=\"large-2 medium-2 cell\">
\t\t\t<a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\" class=\"menu\">Déconnexion</a>
\t\t</div>

\t</div>

\t<div class=\"grid-x grid-padding-x contenu\">

\t\t<div class=\"large-12 medium-12 cell\">
\t\t\t<img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/img/photoProfil.png"), "html", null, true);
        echo "\" class=\"profil\" alt=\"Photo de profil\" />
\t\t</div>

\t</div>

\t<div class=\"grid-x grid-padding-x contenu\">

\t\t<div class=\"large-4 medium-4 cell renseignementProfil\" onclick=\"afficheApropos()\">
\t\t\t<h1>À propos</h1>
\t\t</div>

\t\t<div class=\"large-4 medium-4 cell nomProfil\">
\t\t\t<h1>";
        // line 56
        echo twig_escape_filter($this->env, ($context["prenom"] ?? $this->getContext($context, "prenom")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom")), "html", null, true);
        echo "</h1>
\t\t</div>

\t\t<div class=\"large-4 medium-4 cell photoProfil\" onclick=\"affichePhoto()\">
\t\t\t<h1>Photo</h1>
\t\t</div>

\t</div>

\t<hr/>

\t<div class=\"grid-x grid-padding-x contenu\">

\t\t<div class=\"large-6 medium-6 cell mur\">
\t\t\t<p>Créer une publication</p>
\t\t</div>

\t\t<div class=\"large-6 medium-6 cell mur\">
\t\t\t<p>Photo/vidéo</p>
\t\t</div>

\t</div>

\t<hr/>

\t<div class=\"grid-x grid-padding-x contenu\" id=\"photo\">
\t\t<div class=\"gallery cf\">



<!-- GALERE-->



  <div>
  <img src=\"css/img/photoProfil.png\" class=\"profil\" alt=\"Photo de profil\" />
  </div>
  <div>
  <img src=\"css/img/photoProfil.png\" class=\"profil\" alt=\"Photo de profil\" />
  </div>
  <div>
  <img src=\"css/img/photoProfil.png\" class=\"profil\" alt=\"Photo de profil\" />
  </div>
  <div>
  <img src=\"css/img/photoProfil.png\" class=\"profil\" alt=\"Photo de profil\" />
  </div>
  <div>
  <img src=\"css/img/photoProfil.png\" class=\"profil\" alt=\"Photo de profil\" />
  </div>
  <div>
  <img src=\"css/img/photoProfil.png\" class=\"profil\" alt=\"Photo de profil\" />
  </div>












\t\t</div>
\t</div>

\t<div class=\"grid-x grid-padding-x contenu\" id=\"Apropos\">

\t\t<div class=\"tab\">
  \t\t\t<button class=\"tablinks\" onclick=\"openCity(event, 'London')\"><h2>Informations générales et coordonnées</h2></button>
  \t\t\t<button class=\"tablinks\" onclick=\"openCity(event, 'Paris')\"><h2>Emploi et scolarité</h2></button>
  \t\t\t<button class=\"tablinks\" onclick=\"openCity(event, 'Tokyo')\"><h2>Évènements marquants</h2></button>
\t\t</div>

\t\t<div id=\"London\" class=\"tabcontent\">
  \t\t\t<h2>Coordonnées</h2>
\t\t\t  <p>tel</p>
\t\t\t  <p>email</p>
\t\t</div>

\t\t<div id=\"Paris\" class=\"tabcontent\">
  \t\t\t<h2>Emploi</h2>
\t\t\t  <p>chômage</p>
\t\t\t <h2>Scolarité</h2>
\t\t\t <p>";
        // line 141
        echo twig_escape_filter($this->env, ($context["bio"] ?? $this->getContext($context, "bio")), "html", null, true);
        echo "</p>
\t\t</div>

\t\t<div id=\"Tokyo\" class=\"tabcontent\">
  \t\t\t<h2>Évènements</h2>
  \t\t\t<p>ecrire</p>
\t\t</div>

\t</div>




\t\t<div class=\"grid-x grid-padding-x footer\">
\t\t\t<div class=\"large-12 medium-12 cell\">
\t\t\t\t<p class=\"footer\">&copy; Aix-Marseille Université</p>
\t\t\t</div>
\t\t</div>


</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 164
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 165
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fonctionsPages.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 165,  246 => 164,  214 => 141,  124 => 56,  109 => 44,  98 => 36,  91 => 32,  82 => 28,  75 => 24,  68 => 20,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"grid-container.fluid\">



\t<div class=\"grid-x grid-padding-x menu\">

\t\t<div class=\"large-3 medium-3 cell\">
\t\t\t<h1>*Logo*</h1>
\t\t</div>

\t\t<div class=\"large-2 medium-2 cell\">
\t\t\t<input type=\"text\" class=\"menu\" placeholder=\"Chercher...\" />
\t\t</div>

\t\t<div class=\"large-2 medium-2 cell lienAccueil\">
\t\t\t<a href=\"{{path('homepage')}}\" class=\"menu\">Accueil</a>
\t\t</div>

\t\t<div class=\"large-1 medium-1 cell\">
\t\t\t<img src=\"{{ asset('css/img/invitations.png')}}\" class=\"menu\" alt=\"Invitations\" />
\t\t</div>

\t\t<div class=\"large-1 medium-1 cell\">
\t\t<a href=\"{{ path('message')}}\">\t<img src=\"{{ asset('css/img/messages.png')}}\" class=\"menu\" alt=\"Messages\" /></a>
\t\t</div>

\t\t<div class=\"large-1 medium-1 cell\">
\t\t\t<img src=\"{{ asset('css/img/parametres.png')}}\" class=\"menu\" alt=\"Paramètres\" />
\t\t</div>

\t\t<div class=\"large-2 medium-2 cell\">
\t\t\t<a href=\"{{path('logout')}}\" class=\"menu\">Déconnexion</a>
\t\t</div>

\t</div>

\t<div class=\"grid-x grid-padding-x contenu\">

\t\t<div class=\"large-12 medium-12 cell\">
\t\t\t<img src=\"{{ asset('css/img/photoProfil.png')}}\" class=\"profil\" alt=\"Photo de profil\" />
\t\t</div>

\t</div>

\t<div class=\"grid-x grid-padding-x contenu\">

\t\t<div class=\"large-4 medium-4 cell renseignementProfil\" onclick=\"afficheApropos()\">
\t\t\t<h1>À propos</h1>
\t\t</div>

\t\t<div class=\"large-4 medium-4 cell nomProfil\">
\t\t\t<h1>{{prenom}} {{nom}}</h1>
\t\t</div>

\t\t<div class=\"large-4 medium-4 cell photoProfil\" onclick=\"affichePhoto()\">
\t\t\t<h1>Photo</h1>
\t\t</div>

\t</div>

\t<hr/>

\t<div class=\"grid-x grid-padding-x contenu\">

\t\t<div class=\"large-6 medium-6 cell mur\">
\t\t\t<p>Créer une publication</p>
\t\t</div>

\t\t<div class=\"large-6 medium-6 cell mur\">
\t\t\t<p>Photo/vidéo</p>
\t\t</div>

\t</div>

\t<hr/>

\t<div class=\"grid-x grid-padding-x contenu\" id=\"photo\">
\t\t<div class=\"gallery cf\">



<!-- GALERE-->



  <div>
  <img src=\"css/img/photoProfil.png\" class=\"profil\" alt=\"Photo de profil\" />
  </div>
  <div>
  <img src=\"css/img/photoProfil.png\" class=\"profil\" alt=\"Photo de profil\" />
  </div>
  <div>
  <img src=\"css/img/photoProfil.png\" class=\"profil\" alt=\"Photo de profil\" />
  </div>
  <div>
  <img src=\"css/img/photoProfil.png\" class=\"profil\" alt=\"Photo de profil\" />
  </div>
  <div>
  <img src=\"css/img/photoProfil.png\" class=\"profil\" alt=\"Photo de profil\" />
  </div>
  <div>
  <img src=\"css/img/photoProfil.png\" class=\"profil\" alt=\"Photo de profil\" />
  </div>












\t\t</div>
\t</div>

\t<div class=\"grid-x grid-padding-x contenu\" id=\"Apropos\">

\t\t<div class=\"tab\">
  \t\t\t<button class=\"tablinks\" onclick=\"openCity(event, 'London')\"><h2>Informations générales et coordonnées</h2></button>
  \t\t\t<button class=\"tablinks\" onclick=\"openCity(event, 'Paris')\"><h2>Emploi et scolarité</h2></button>
  \t\t\t<button class=\"tablinks\" onclick=\"openCity(event, 'Tokyo')\"><h2>Évènements marquants</h2></button>
\t\t</div>

\t\t<div id=\"London\" class=\"tabcontent\">
  \t\t\t<h2>Coordonnées</h2>
\t\t\t  <p>tel</p>
\t\t\t  <p>email</p>
\t\t</div>

\t\t<div id=\"Paris\" class=\"tabcontent\">
  \t\t\t<h2>Emploi</h2>
\t\t\t  <p>chômage</p>
\t\t\t <h2>Scolarité</h2>
\t\t\t <p>{{bio}}</p>
\t\t</div>

\t\t<div id=\"Tokyo\" class=\"tabcontent\">
  \t\t\t<h2>Évènements</h2>
  \t\t\t<p>ecrire</p>
\t\t</div>

\t</div>




\t\t<div class=\"grid-x grid-padding-x footer\">
\t\t\t<div class=\"large-12 medium-12 cell\">
\t\t\t\t<p class=\"footer\">&copy; Aix-Marseille Université</p>
\t\t\t</div>
\t\t</div>


</div>
{% endblock %}

{% block javascripts %}
\t<script src=\"{{asset('js/fonctionsPages.js')}}\"></script>
{% endblock %}
", "profile.html.twig", "C:\\Users\\kevin\\Desktop\\projet Symfony\\projet_v1_27_04-new_profile_page\\facebook\\app\\Resources\\views\\profile.html.twig");
    }
}
