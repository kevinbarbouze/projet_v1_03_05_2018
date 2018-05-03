<?php

/* pageMessage.html.twig */
class __TwigTemplate_0acd81e494143bc6cae64f8161986c1e4e387f64f5928e6cd775c3ed1c649088 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pageMessage.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pageMessage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pageMessage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Message privée";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<div class=\"grid-container.fluid\">



\t<div class=\"grid-x grid-padding-x menu\">

\t\t<div class=\"large-3 medium-3 cell\">
\t\t\t<h1>*Logo*</h1>
\t\t</div>

\t\t<div class=\"large-2 medium-2 cell\">
\t\t\t<input type=\"text\" class=\"menu\" placeholder=\"Chercher...\" />
\t\t</div>

\t\t<div class=\"large-2 medium-2 cell\">
\t\t\t<a href=\"pageTimeLine.php\" class=\"menu\">Accueil</a>
\t\t</div>

\t\t<div class=\"large-1 medium-1 cell\">
\t\t\t<img src=\"css/img/invitations.png\" alt=\"Invitations\" />
\t\t</div>

\t\t<div class=\"large-1 medium-1 cell\">
\t\t\t<img src=\"css/img/messages.png\" alt=\"Messages\" />
\t\t</div>

\t\t<div class=\"large-1 medium-1 cell\">
\t\t\t<img src=\"css/img/parametres.png\" alt=\"Paramètres\" />
\t\t</div>

\t\t<div class=\"large-2 medium-2 cell\">
\t\t\t<a href=\"deconnexion.php\" class=\"menu\">Déconnexion</a>
\t\t</div>

\t</div>

\t<div class=\"grid-x grid-padding-x contenu\">

\t\t<div class=\"large-12 medium-12 cell\">
\t\t\t<h1> Messagerie privée </h1>
\t\t</div>
\t</div>

\t<hr/>

\t\t\t<div class=\"grid-x grid-padding-x contenu\">

\t\t\t<div id=\"msg\" class=\"large-3 medium-3 cell msg\">
\t\t\t<h1> Messages </h1>
\t\t\t</div>
\t\t\t<div id=\"msg\" class=\"large-8 medium-8 cell msg\">
\t\t\t<h1> Conversation </h1>
\t\t\t</div>
\t\t\t</div>

\t\t<div class=\"grid-x grid-padding-x contenu\">

\t\t<div id=\"tchat\" class=\"large-3 medium-3 cell\">
\t\t<h1> *Liste conversations récentes* </h1>
\t\t</div>

\t\t<div id=\"tchat\" class=\"large-8 medium-8 cell tchat\">
\t\t</div>
\t\t</div>

\t\t<div class=\"grid-x grid-padding-x contenu\">

\t\t<div id=\"tchat\" class=\"large-3 medium-3 cell\">
\t\t</div>

\t\t<div id=\"tchat\" class=\"large-8 medium-8 cell \">
\t\t<form name=\"message\" action=\"\">
        <input class=\"msg\" name=\"usermsg\" type=\"text\" id=\"usermsg\"  placeholder=\"Saisissez votre message...\" />
        <input class=\"btnenv\" name=\"envoyer\" type=\"submit\"  id=\"envoyer\" value=\"Envoyer\"/>
\t\t</form>
\t\t</div>
\t\t</div>





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

    public function getTemplateName()
    {
        return "pageMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Message privée{% endblock %}

{% block body %}


<div class=\"grid-container.fluid\">



\t<div class=\"grid-x grid-padding-x menu\">

\t\t<div class=\"large-3 medium-3 cell\">
\t\t\t<h1>*Logo*</h1>
\t\t</div>

\t\t<div class=\"large-2 medium-2 cell\">
\t\t\t<input type=\"text\" class=\"menu\" placeholder=\"Chercher...\" />
\t\t</div>

\t\t<div class=\"large-2 medium-2 cell\">
\t\t\t<a href=\"pageTimeLine.php\" class=\"menu\">Accueil</a>
\t\t</div>

\t\t<div class=\"large-1 medium-1 cell\">
\t\t\t<img src=\"css/img/invitations.png\" alt=\"Invitations\" />
\t\t</div>

\t\t<div class=\"large-1 medium-1 cell\">
\t\t\t<img src=\"css/img/messages.png\" alt=\"Messages\" />
\t\t</div>

\t\t<div class=\"large-1 medium-1 cell\">
\t\t\t<img src=\"css/img/parametres.png\" alt=\"Paramètres\" />
\t\t</div>

\t\t<div class=\"large-2 medium-2 cell\">
\t\t\t<a href=\"deconnexion.php\" class=\"menu\">Déconnexion</a>
\t\t</div>

\t</div>

\t<div class=\"grid-x grid-padding-x contenu\">

\t\t<div class=\"large-12 medium-12 cell\">
\t\t\t<h1> Messagerie privée </h1>
\t\t</div>
\t</div>

\t<hr/>

\t\t\t<div class=\"grid-x grid-padding-x contenu\">

\t\t\t<div id=\"msg\" class=\"large-3 medium-3 cell msg\">
\t\t\t<h1> Messages </h1>
\t\t\t</div>
\t\t\t<div id=\"msg\" class=\"large-8 medium-8 cell msg\">
\t\t\t<h1> Conversation </h1>
\t\t\t</div>
\t\t\t</div>

\t\t<div class=\"grid-x grid-padding-x contenu\">

\t\t<div id=\"tchat\" class=\"large-3 medium-3 cell\">
\t\t<h1> *Liste conversations récentes* </h1>
\t\t</div>

\t\t<div id=\"tchat\" class=\"large-8 medium-8 cell tchat\">
\t\t</div>
\t\t</div>

\t\t<div class=\"grid-x grid-padding-x contenu\">

\t\t<div id=\"tchat\" class=\"large-3 medium-3 cell\">
\t\t</div>

\t\t<div id=\"tchat\" class=\"large-8 medium-8 cell \">
\t\t<form name=\"message\" action=\"\">
        <input class=\"msg\" name=\"usermsg\" type=\"text\" id=\"usermsg\"  placeholder=\"Saisissez votre message...\" />
        <input class=\"btnenv\" name=\"envoyer\" type=\"submit\"  id=\"envoyer\" value=\"Envoyer\"/>
\t\t</form>
\t\t</div>
\t\t</div>





\t\t<div class=\"grid-x grid-padding-x footer\">
\t\t\t<div class=\"large-12 medium-12 cell\">
\t\t\t\t<p class=\"footer\">&copy; Aix-Marseille Université</p>
\t\t\t</div>
\t\t</div>


</div>
{% endblock body %}
", "pageMessage.html.twig", "C:\\Users\\kevin\\Desktop\\projet Symfony\\projet_v1_27_04-new_profile_page\\facebook\\app\\Resources\\views\\pageMessage.html.twig");
    }
}
