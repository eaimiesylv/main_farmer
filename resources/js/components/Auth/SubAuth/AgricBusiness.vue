<template>
  <div class="container-fluid p-0">
    <h4>Agric Business Detail</h4>
    <!-- Name Of Organization -->
    <div class="form-row">
      <div class="form-group col-12">
        <label class="col-sm-12 col-form-label">Name Of Organization</label>
        <input
          type="text"
          class="form-control"
          v-model="fields.organizationName"
          placeholder="Name of organization"
          required
        />
      </div>
    </div>

    <!-- Name of deal -->
    <div class="form-row">
      <div class="form-group col-12">
        <label class="col-sm-12 col-form-label">Name Of Deal</label>
        <input
          type="text"
          class="form-control"
          v-model="fields.dealName"
          placeholder="Name of deal"
          required
        />
      </div>
    </div>

    <!-- Deal Promoter(s) -->
    <div class="form-row">
      <div class="form-group col-12">
        <label class="col-sm-12 col-form-label">Deal Promoter(s)</label>
        <input
          type="text"
          class="form-control"
          v-model="fields.dealPromoters"
          placeholder="Deal promoter(s)"
          required
        />
      </div>
    </div>

    <!-- Describe The Deal -->
    <div class="form-row">
      <div class="form-group col-12">
        <label class="col-sm-12 col-form-label">Describe The Deal</label>
        <textarea
          class="form-control"
          v-model="fields.dealDescription"
          rows="4"
          placeholder="Describe the deal"
          required
        ></textarea>
      </div>
    </div>

    <!-- Do You Have A Bankable Business Plan -->
    <div class="form-row">
      <div class="form-group col-12">
        <label class="col-sm-12 col-form-label">Do You Have A Bankable Business Plan</label>
        <div>
          <label
            v-for="planOption in bankableBusinessPlans"
            :key="planOption.value"
            class="form-checkbox-label"
          >
            <input
              type="radio"
              :value="planOption.value"
              v-model="fields.hasBusinessPlan"
              name="hasBusinessPlan"
              required
            />
            {{ planOption.label }}
          </label>
        </div>
      </div>
    </div>

    <!-- Focal States -->
    <div class="form-row">
      <div class="form-group col-12">
        <label class="col-sm-12 col-form-label">Focal States</label>
        <input
          type="text"
          class="form-control"
          v-model="fields.focalStates"
          placeholder="Focal states"
          required
        />
      </div>
    </div>

    <!-- Ticket Size -->
    <div class="form-row">
      <div class="form-group col-12">
        <label class="col-sm-12 col-form-label">Ticket Size</label>
        <select class="form-control col-12" v-model="fields.ticketSize" required>
          <option
            v-for="ticketSizeOption in ticketSizes"
            :key="ticketSizeOption.value"
            :value="ticketSizeOption.value"
          >
            {{ ticketSizeOption.label }}
          </option>
        </select>
      </div>
    </div>

    <!-- How Much Are You Looking To Raise? -->
    <div class="form-row">
      <div class="form-group col-12">
        <label class="col-sm-12 col-form-label">How Much Are You Looking To Raise?</label>
        <textarea
          class="form-control"
          v-model="fields.raiseAmount"
          required
          rows="3"
          placeholder="Amount you're looking to raise"
        ></textarea>
      </div>
    </div>

    <!-- For What Purpose -->
    <div class="form-row">
      <div class="form-group col-12">
        <label class="col-sm-12 col-form-label">For What Purpose</label>
        <textarea
          class="form-control"
          v-model="fields.purpose"
          rows="4"
          required
          placeholder="For what purpose"
        ></textarea>
      </div>
    </div>

    <!-- Preferred Value Chain -->
    <div class="form-row">
      <div class="form-group col-12">
        <label class="col-sm-12 col-form-label">Preferred Value Chain</label>
        <input
          type="radio"
          :checked="fields.preferredValueChain.length > 0"
          name="checkChain"
          class="custom-checkbox"
          required
        />
        <div
          v-for="valueChain in preferredValueChains"
          :key="valueChain.value"
          class="form-checkbox-label"
        >
          <label class="col-sm-12 col-form-label">
            <input
              type="checkbox"
              :value="valueChain.value"
              v-model="fields.preferredValueChain"
            />
            {{ valueChain.label }}
          </label>
        </div>
      </div>
    </div>

    <!-- Other Value Chains (Please specify) -->
    <div class="form-row">
      <div class="form-group col-12">
        <label class="col-sm-12 col-form-label">Other Value Chains (Please specify)</label>
        <textarea
          class="form-control"
          v-model="fields.otherValueChains"
          rows="4"
          placeholder="Other value chains (specify)"
        ></textarea>
      </div>
    </div>
  </div>
</template>

<!-- The rest of your script and style tags remain the same -->


<!-- The rest of your script and style tags remain the same -->


<script>


export default {
  name: "AgricBusiness",
  data() {
    return {
     
      fields: {
        organizationName:'a',
        dealName: 'a', 
        dealPromoters: 'a' ,
        dealDescription: 'a', 
        hasBusinessPlan:'a', 
        focalStates: 'a', 
        ticketSize: 'a', 
        raiseAmount: 'a' ,
        purpose: 'a',
        preferredValueChain: [], 
        otherValueChains: null,
        
      
      },
      
      preferredDealSizes: [
        { value: "Below 1 million Dollars", label: "Below 1 million Dollars" },
        { value: "Others", label: "Others" },
      ],
      fundingTypes: [
        { value: "Equity", label: "Equity" },
        { value: "Debt", label: "Debt" },
        { value: "Other", label: "Other" },
      ],
      bankableBusinessPlans: [
        { value: "Yes", label: "yes" },
        { value: "No", label: "no"},
      ],
      preferredValueChains: [
        { value: "Crop", label: "Crop" },
        { value: "Livestock", label: "Livestock" },
        { value: "Fishery and Aquaculture", label: "Fishery and Aquaculture" },
        { value: "Agribusiness", label: "Agribusiness" },
      ],
      ticketSizes: [
      { value: "0-50 Million Naira", label: "0-50 Million Naira" },
      { value: "50-100 Million Naira", label: "50-100 Million Naira" },
      { value: "100-500 Million Naira", label: "100-500 Million Naira" },
      { value: "500-1 Billion Naira", label: "500-1 Billion Naira" },
      { value: "1 Billion Naira and Above", label: "1 Billion Naira and Above" },
    ],

     
    
    };
  },
  methods:{
   
  }
 
};
</script>
<style>
.form-checkbox-label {
  display: block;
  margin-bottom: 8px;
}
 
</style>
